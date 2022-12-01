<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:53:12
  from '/var/www/html/modules/bluepayment/views/templates/hook/gtag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638906284d9933_66960459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe660fc076f094bdb793894dd2726a5bb3da97f7' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/hook/gtag.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638906284d9933_66960459 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Global site tag (gtag.js) - Google Analytics -->

<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
>

<!-- END Global site tag (gtag.js) - Google Analytics -->

<?php if ((isset($_smarty_tpl->tpl_vars['bm_ajax_controller']->value))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var bm_ajax_controller = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bm_ajax_controller']->value, ENT_QUOTES, 'UTF-8');?>
";
	<?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['controller']->value)) && $_smarty_tpl->tpl_vars['controller']->value == 'cart') {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {
			$("body").on("click", ".cart-detailed-actions .btn", function () {

                
				gtag('event', 'begin_checkout', {
					"items": [
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            {
							"id": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
							"name": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'] ));?>
",
							"brand": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'] ));?>
",
							"category": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'] ));?>
",
							"variant": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
",
							"quantity": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cart_quantity'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
							"price": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                            },
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
					],
                    
				});
                
			});
		});
	<?php echo '</script'; ?>
>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['controller']->value)) && $_smarty_tpl->tpl_vars['controller']->value == 'product' && (isset($_smarty_tpl->tpl_vars['product']->value))) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['ga4_tracking_id']->value)) && !empty($_smarty_tpl->tpl_vars['ga4_tracking_id']->value) && (isset($_smarty_tpl->tpl_vars['ga4_secret']->value)) && !empty($_smarty_tpl->tpl_vars['ga4_secret']->value)) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		const ga4_tracking_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga4_tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
';
        const ga4_secret = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga4_secret']->value, ENT_QUOTES, 'UTF-8');?>
';
        
        fetch(`https://www.google-analytics.com/mp/collect?api_secret=${ga4_secret}&measurement_id=${ga4_tracking_id}`, {
	        method: "POST",
	        body: JSON.stringify({
		        "client_id": "1754484819.1650904185",
		        "events": [
                    {
                        "id": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                        "name": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'] ));?>
",
                        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']))) {?>
                        "brand": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],','),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                        <?php }?>
                        "category": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'] ));?>
",
                        "variant": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                        "price": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                    }
                ],
	        })
        });
        
	<?php echo '</script'; ?>
>
	<?php } else { ?>
	<?php echo '<script'; ?>
 type="text/javascript">
        
		gtag('event', 'view_item', {
			"items": [
				{
					"id": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"name": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'] ));?>
",
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']))) {?>
					"brand": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],','),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                    <?php }?>
					"category": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'] ));?>
",
					"variant": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"price": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                    }
			],
            
		});
        
	<?php echo '</script'; ?>
>
	<?php }
}?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {
			if (typeof prestashop !== 'undefined') {


                $('body').delegate('#add-to-cart-or-refresh button[type=submit]', 'click', function(e){
                    let qtyAdd = $(this).parent().parent().find('#quantity_wanted').val();
                    localStorage.setItem('ga_temp_add_product_quantity', qtyAdd);
                });

                $('body').delegate('.remove-from-cart', 'click', function(e){
                    let qtyRemove = $(this).parent().parent().parent().find('.js-cart-line-product-quantity').val();
                    localStorage.setItem('ga_temp_remove_product_quantity', qtyRemove);
                });

				prestashop.on('updateCart', function (event) {
					if (event && event.reason) {
						if (event.reason.linkAction === 'delete-from-cart') {

                            let product_remove_qty = localStorage.getItem('ga_temp_remove_product_quantity');

							bmEventRemoveProduct(
								event.reason.idProduct,
								event.reason.idProductAttribute,
                                product_remove_qty
							);
						} else if (event.reason.linkAction === 'add-to-cart') {

                            let product_add_qty = localStorage.getItem('ga_temp_add_product_quantity');

							if (event.reason.cart.products.length > 0) {
								const products = event.reason.cart.products;
								products.forEach(function (data, index) {
									if (parseInt(products[index].id_product) === event.reason.idProduct) {
										gtag('event', 'add_to_cart', {
											"items": [
												{
													"id": products[index].id_product,
													"name": products[index].name,
													"brand": products[index].manufacturer_name,
													"category": products[index].category,
													"variant": products[index].id_product_attribute,
													"quantity": product_add_qty,
													"price": products[index].price,
												}
											],
										});
									}
								});
							}
						}
					}
				});
			}
		});
		$("body").on("click", ".js-product-miniature", function () {
			var elm = $(this).find('.ga-listing');
			gtag('event', 'select_content', {
				"content_type": "product",
				"items": [
					{
						"id": elm.attr('data-product-id'),
						"name": elm.attr('data-product-name'),
						"brand": elm.attr('data-product-brand'),
						"cat": elm.attr('data-product-cat'),
						"price": elm.attr('data-product-price'),
					}
				]
			});
		});
		function bmEventRemoveProduct(id, id_attribute, qty) {
			$.ajax({
				type: 'POST',
				cache: false,
				dataType: 'json',
				url: bm_ajax_controller,
				data: {
					ajax: 1,
					action: 'GaRemoveProduct',
					id_product: id,
					id_attribute: id_attribute,
					qty: qty,
				},
				success: function (response) {
					if (response.success) {
						gtag('event', 'remove_from_cart', {
							"items": [
								{
									"id": response.data.id,
									"name": response.data.name,
									"brand": response.data.brand,
									"variant": response.data.variant,
									"price": response.data.price,
                                    "quantity": qty,
								}
							],
						});
					}
				},
				error: function (response) {
					console.log(response);
				}
			});
		}
	<?php echo '</script'; ?>
>

<?php }
}
