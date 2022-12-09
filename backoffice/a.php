<?php
    // Check if _PS_ADMIN_DIR_ is defined
    if (!defined('_PS_ADMIN_DIR_')) {
        // if _PS_ADMIN_DIR_ is not defined, define.
        define('_PS_ADMIN_DIR_', getcwd());
    }
    // Setup connection with config.inc.php (required for database connection, ...)
    include(_PS_ADMIN_DIR_.'/../config/config.inc.php');
    $secure_key = '';
    //die(Tools::getValue('secure_key'));
    // Check if the client use the correct secure_key, url to use: www.yourstore.com/yourbackoffice/importmyproduct.php?secure_key=ed3fa1ce558e1c2528cfbaa3f99403
    //if(!Tools::getValue('secure_key') || Tools::getValue('secure_key') != $secure_key) {
        // If the secure_key is not set our not equal the php page will stop running.
        //die('UNAUTHORIZED: We dont want you on this page!');
    //}
    echo 'Welcome, the secure_key you have used is correct. Now we can start adding product programmatically ... <br>';
    function addProduct($sal, $ean13, $name, $qty, $text, $features, $price, $imgUrl, $catDef, $catAll) {
        $product = new Product();              // Create new product in prestashop
        $product->ean13 = $ean13;
        $product->name = createMultiLangField($name);
        $product->description = htmlspecialchars($text);
        $product->id_category_default = $catDef;
        $product->redirect_type = '301';
        $product->price = number_format($price, 6, '.', '');
        $product->minimal_quantity = 1;
        $product->show_price = 1;
        $product->on_sale = $sal; 
        $product->online_only = 0;
        $product->meta_description = '';
        $product->link_rewrite = createMultiLangField(Tools::str2url($name));
        $product->add();                        // Submit new product
        StockAvailable::setQuantity($product->id, null, $qty); // id_product, id_product_attribute, quantity
        $product->addToCategories($catAll);     // After product is submitted insert all categories

        // Insert "feature name" and "feature value"
        if (is_array($features)) {
            foreach ($features as $feature) {
                $attributeName = $feature['name'];
                $attributeValue = $feature['value'];

                // 1. Check if 'feature name' exist already in database
                $FeatureNameId = Db::getInstance()->getValue('SELECT id_feature FROM ' . _DB_PREFIX_ . 'feature_lang WHERE name = "' . pSQL($attributeName) . '"');
                // If 'feature name' does not exist, insert new.
                if (empty($FeatureNameId)) {
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature` (`id_feature`,`position`) VALUES (0, 0)');
                    $FeatureNameId = Db::getInstance()->Insert_ID(); // Get id of "feature name" for insert in product
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_shop` (`id_feature`,`id_shop`) VALUES (' . $FeatureNameId . ', 1)');
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_lang` (`id_feature`,`id_lang`, `name`) VALUES (' . $FeatureNameId . ', ' . Context::getContext()->language->id . ', "' . pSQL($attributeName) . '")');
                }

                // 1. Check if 'feature value name' exist already in database
                $FeatureValueId = Db::getInstance()->getValue('SELECT id_feature_value FROM ' . _DB_PREFIX_ . 'feature_value WHERE id_feature_value IN (SELECT id_feature_value FROM `' . _DB_PREFIX_ . 'feature_value_lang` WHERE value = "' . pSQL($attributeValue) . '") AND id_feature = ' . $FeatureNameId);
                // If 'feature value name' does not exist, insert new.
                if (empty($FeatureValueId)) {
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_value` (`id_feature_value`,`id_feature`,`custom`) VALUES (0, ' . $FeatureNameId . ', 0)');
                    $FeatureValueId = Db::getInstance()->Insert_ID();
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_value_lang` (`id_feature_value`,`id_lang`,`value`) VALUES (' . $FeatureValueId . ', ' . Context::getContext()->language->id . ', "' . pSQL($attributeValue) . '")');
                }
                Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_product` (`id_feature`, `id_product`, `id_feature_value`) VALUES (' . $FeatureNameId . ', ' . $product->id . ', ' . $FeatureValueId . ')');
            }
        }

        // add product image.
        $shops = Shop::getShops(true, null, true);
        $image = new Image();
        $image->id_product = $product->id;
        $image->position = Image::getHighestPosition($product->id) + 1;
        $image->cover = true;
        if (($image->validateFields(false, true)) === true && ($image->validateFieldsLang(false, true)) === true && $image->add()) {
            $image->associateTo($shops);
            if (!uploadImage($product->id, $image->id, $imgUrl)) {
                $image->delete();
            }
        }
        echo 'Product added successfully (ID: ' . $product->id . ')';
    }
    function uploadImage($id_entity, $id_image = null, $imgUrl) {
        $tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'ps_import');
        $watermark_types = explode(',', Configuration::get('WATERMARK_TYPES'));
        $image_obj = new Image((int)$id_image);
        $path = $image_obj->getPathForCreation();
        $imgUrl = str_replace(' ', '%20', trim($imgUrl));
        // Evaluate the memory required to resize the image: if it's too big we can't resize it.
        if (!ImageManager::checkImageMemoryLimit($imgUrl)) {
            return false;
        }
        if (@copy($imgUrl, $tmpfile)) {
            ImageManager::resize($tmpfile, $path . '.jpg');
            $images_types = ImageType::getImagesTypes('products');
            foreach ($images_types as $image_type) {
                ImageManager::resize($tmpfile, $path . '-' . stripslashes($image_type['name']) . '.jpg', $image_type['width'], $image_type['height']);
                if (in_array($image_type['id_image_type'], $watermark_types)) {
                Hook::exec('actionWatermark', array('id_image' => $id_image, 'id_product' => $id_entity));
                }
            }
        } else {
            unlink($tmpfile);
            return false;
        }
        unlink($tmpfile);
        return true;
    }
    function createMultiLangField($field) {
        $res = array();
        foreach (Language::getIDs(false) as $id_lang) {
            $res[$id_lang] = $field;
        }
        return $res;
    }

    function addDiscount($id_field){
        $specificPrice = new SpecificPrice();
        $specificPrice->id_product = $id_field;
        $specificPrice->id_shop = 1;
        $specificPrice->id_currency = 0;
        $specificPrice->id_country = 14;
        $specificPrice->id_group = 0;
        $specificPrice->id_customer = 0;
        $specificPrice->price = '-1';
        $specificPrice->from_quantity = 1;
        $specificPrice->reduction = 0.1;
        $specificPrice->reduction_type = 'percentage';
        $specificPrice->reduction_tax = 1;
        $specificPrice->from = '2022-10-10';
        $specificPrice->to = '2024-10-10';
        $specificPrice->add();
    }

    $string = file_get_contents("cat_id.json");
    $json_a = json_decode($string, true);

    $prod = file_get_contents("prod.json");
    $json_prod = json_decode($prod, true);
    $counter = 0;
    foreach ($json_prod as $value){
        $counter++;
        print_r("\n");
        print_r($value["product_name"]);
        print_r("\n");
        $tmp = str_replace(",",".",$value["price"]);
        $tmp2 = str_replace("\u00a0z\u0142","",$tmp);
        $tmp3 = str_replace(" ","",$tmp2);
        $sal = 0;
        if ($counter>20 && $counter <24){
            $sal=1;
        }
        addProduct(
            $sal,
            '1234567891234',                         // Product EAN13
            //'Tutorial by Crezzur',                         // Product reference
            $value["product_name"],                               // Product name
            1000,                                       // Product quantity
            $value["info"], // Product description
            array(                                  // Product features (array)
                array("name" => "Color", "value" => "Black"),
                array("name" => "Height", "value" => "200cm"),
           ),
            $tmp3,                                // Product price
            $value["image"],       // Product image
            $json_a[$value["sub_category"]],                                       // Product default category
            //"10",
            array($json_a[$value["sub_category"]])                              // All categorys for product (array)
       );

       
    }
    for ($i= 21; $i<24;$i+=1){
        addDiscount($i);
    }
    
    
