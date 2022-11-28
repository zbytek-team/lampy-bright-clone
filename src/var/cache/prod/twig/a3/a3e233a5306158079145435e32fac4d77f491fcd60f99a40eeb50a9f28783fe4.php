<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8fd6b315f19bccd6cb014e734c881ea207db3efaabcc979f8cdb00b6cc4d3781 */
class __TwigTemplate_2efec932b8cccef721cf104cb6d99f8d38f65a223f7b7d0bdb8598f55794d32a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Katalog • PrestaShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsMboModule';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = 'd68ddf17667d9c335d66725050d98c02';
    var token_admin_orders = tokenAdminOrders = 'a0064015e04449d4dc9e8ca93be1ab72';
    var token_admin_customers = 'a72745599455c50069da14c13bf9c83d';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '46ddd767c7bf138cf7d5c418303303c8';
    var currentIndex = 'index.php?controller=AdminPsMboModule';
    var employee_token = '026d403e4721c4cacca45f284c8dc043';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin-dev/index.php/improve/modules/catalog/recommended?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA';
    var admin_notification_get_link = '/admin-dev/index.php/common/notifications?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA';";
        // line 42
        echo "
    var admin_notification_push_link = adminNotificationPushLink = '/admin-dev/index.php/common/notifications/ack?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/admin-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin-dev\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin-dev\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"pri";
        // line 64
        echo "maryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin-dev/index.php/common/notifications?_token=dWOb9tX2jWlD6UUSfx3M";
        // line 91
        echo "4gyFG7SR-lH-TtPDdArExlA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/admin-dev\\/index.php?controller=AdminGamification&token=ff636157160d9f390a9c29c020258fe0\";
            var current_id_tab = 137;
        </script>

";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminpsmbomodule\"
  data-base-url=\"/admin-dev/index.php\"  data-token=\"dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/admin-dev/index.php?controller=AdminDashboard&amp;token=ef4363f1ff84e06c2bf0bfc090839619\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9527b3884096bf4ea1f8dc375ea31043\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin-dev/index.php/improve/modules/manage?token=e519b01b38e50a209a11b8b269268bb1\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin-dev/index.php/sell/catalog/categories/new?token=e519b01b38e50a209a11b8b269268bb1\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin-dev/index.php/sell/catalog/products/new?token=e519b01b38e50a209a11b8b269268bb1\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin-dev/in";
        // line 142
        echo "dex.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c11e90b60e2941dd09f0a231e48bb53c\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin-dev/index.php?controller=AdminOrders&amp;token=a0064015e04449d4dc9e8ca93be1ab72\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"69\"
        data-icon=\"icon-AdminParentModulesCatalog\"
        data-method=\"add\"
        data-url=\"index.php/modules/addons/modules/catalog?-lH-TtPDdArExlA\"
        data-post-link=\"https://localhost/admin-dev/index.php?controller=AdminQuickAccesses&token=c493dcdabd4a22d19cee8c722de63428\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Module Catalog - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/admin-dev/index.php?controller=AdminQuickAccesses&token=c493dcdabd4a22d19cee8c722de63428\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin-dev/index.php?controller=AdminSearch&amp;token=51123ed972622f60aebe9a1b75549d77\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
  ";
        // line 181
        echo "    <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">se";
        // line 195
        echo "arch</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab";
        // line 255
        echo "\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"https://localhost/admin-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5e380a0534233af44d1e50f842db273c\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a c";
        // line 303
        echo "lass=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie John</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin-dev/index.php/configure/advanced/employees/1/edit?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"";
        // line 338
        echo "https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/admin-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=6d61a17f385da293c4b492c7ff30cb19\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin-dev/index.php/configure/advanced/employees/toggle-navigation?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/admin-dev/index.php?controller=AdminDashboard&amp;token=ef4363f1ff84e06c2bf0bfc090839619\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
        ";
        // line 380
        echo "                                              
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin-dev/index.php/sell/orders/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin-dev/index.php/sell/orders/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin-dev/index.php/sell/orders/invoices/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                           ";
        // line 411
        echo "                 
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/credit-slips/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/delivery-slips/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminCarts&amp;token=5e380a0534233af44d1e50f842db273c\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin-dev/index.php/sell/catalog/products?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span";
        // line 442
        echo ">
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin-dev/index.php/sell/catalog/products?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin-dev/index.php/sell/catalog/categories?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin-dev/index.php/sell/catalog/monitoring/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                  ";
        // line 474
        echo "                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminAttributesGroups&amp;token=ea084b6f86254f9554b46c6d8a5967c8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin-dev/index.php/sell/catalog/brands/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin-dev/index.php/sell/attachments/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminCartRules&amp;token=c11e90b60e2941dd09f0a231e48bb53c\" clas";
        // line 502
        echo "s=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin-dev/index.php/sell/stocks/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin-dev/index.php/sell/customers/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin-dev/index.php/sell/custom";
        // line 535
        echo "ers/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin-dev/index.php/sell/addresses/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=46ddd767c7bf138cf7d5c418303303c8\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=";
        // line 567
        echo "\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=46ddd767c7bf138cf7d5c418303303c8\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin-dev/index.php/sell/customer-service/order-messages/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminReturn&amp;token=2c9ecc04292bc6b585f835d6c0685de1\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin-dev/index.php/modules/metrics/legacy/stats?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                   ";
        // line 597
        echo "   <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin-dev/index.php/modules/metrics/legacy/stats?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin-dev/index.php/modules/metrics?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
 ";
        // line 635
        echo "                                                     
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin-dev/index.php/improve/modules/manage?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin-dev/index.php/improve/modules/manage?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin-dev/index.php/modules/addons/modules/catalog?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                     ";
        // line 664
        echo "                                                                                                               </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin-dev/index.php/improve/design/themes/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin-dev/index.php/improve/design/themes/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin-dev/index.php/m";
        // line 693
        echo "odules/addons/themes/catalog?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin-dev/index.php/improve/design/mail_theme/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin-dev/index.php/improve/design/cms-pages/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin-dev/index.php/improve/design/modules/positions/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id";
        // line 724
        echo "=\"subtab-AdminImages\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminImages&amp;token=80f160748a1ead6a6c4e2c73848bd468\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin-dev/index.php/modules/link-widget/list?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/admin-dev/index.php?controller=AdminCarriers&amp;token=0f2588c7b2ad433d009e10f14f25fa7a\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                             ";
        // line 756
        echo "                               
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminCarriers&amp;token=0f2588c7b2ad433d009e10f14f25fa7a\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin-dev/index.php/improve/shipping/preferences/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                       ";
        // line 787
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin-dev/index.php/improve/payment/preferences?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin-dev/index.php/improve/international/localization/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
      ";
        // line 819
        echo "                                        <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin-dev/index.php/improve/international/localization/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin-dev/index.php/improve/international/zones/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin-dev/index.php/improve/international/taxes/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin-dev/index.php/improve/internat";
        // line 848
        echo "ional/translations/settings?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=9fb3594dbae900e8917fc738bd72e55c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=9fb3594dbae900e8917fc738bd72e55c\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 880
        echo "veltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=a20dd1018b083f463a1ead542143acbd\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin-dev";
        // line 916
        echo "/index.php/configure/shop/preferences/preferences?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/order-preferences/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/product-preferences/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/customer-preferences/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
 ";
        // line 947
        echo "                             <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin-dev/index.php/configure/shop/contacts/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminSearchConf&amp;token=07b035ae11c4695d58cd73d4e5af8343\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://localhost/admin-dev/index.php?controller=AdminGamification&amp;token=ff636157160d9f390a9c29c020258fe0\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                    ";
        // line 976
        echo "          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin-dev/index.php/configure/advanced/performance/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" clas";
        // line 1005
        echo "s=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin-dev/index.php/configure/advanced/administration/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin-dev/index.php/configure/advanced/emails/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin-dev/index.php/configure/advanced/import/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin-dev/index.php";
        // line 1037
        echo "/configure/advanced/employees/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin-dev/index.php/configure/advanced/sql-requests/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin-dev/index.php/configure/advanced/logs/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin-dev/index.php/configure/advanced/webservice-keys/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                        ";
        // line 1067
        echo "                    
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin-dev/index.php/configure/advanced/feature-flags/?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                                </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Catalog</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Katalog          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Załaduj moduł
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Połącz z Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Połąc";
        // line 1116
        echo "z z Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.7%2526country%253Dpl/Pomoc?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li class=\"nav-item\">
                    <a href=\"/admin-dev/index.php/modules/addons/modules/catalog?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" id=\"subtab-AdminPsMboModule\" class=\"nav-link tab active current\" data-submenu=\"137\">
                      Module Catalog
                      <span class=\"notification-container\">
     ";
        // line 1143
        echo "                   <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                              <li class=\"nav-item\">
                    <a href=\"/admin-dev/index.php/modules/addons/modules/catalog/selection?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\" id=\"subtab-AdminPsMboAddons\" class=\"nav-link tab \" data-submenu=\"138\">
                      Module Selections
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-ex";
        // line 1159
        echo "panded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Załaduj moduł\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Załaduj moduł
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Połącz z Addons marketplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Połącz z Addons marketplace
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.7%2526country%253Dpl/Pomoc?_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły i usługi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/admin-dev/index.php/modules/addons/modules/recommended?tabClassName=AdminPsMboModule&_token=dWOb9tX2jWlD6UUSfx3M4gyFG7SR-lH-TtPDdArExlA',
      shouldAttachRecommendedModulesAfterContent: 0,
      should";
        // line 1198
        echo "AttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1218
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://localhost/admin-dev/index.php?controller=AdminDashboard&amp;token=ef4363f1ff84e06c2bf0bfc090839619\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=lampy%40bright.pl&amp;firstname=John&amp;lastname=Doe&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin-dev/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t";
        // line 1267
        echo "\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=lampy%40bright.pl&amp;firstname=John&amp;lastname=Doe&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\"";
        // line 1306
        echo " type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1326
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1218
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1326
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8fd6b315f19bccd6cb014e734c881ea207db3efaabcc979f8cdb00b6cc4d3781";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1488 => 1326,  1471 => 1218,  1462 => 104,  1453 => 1326,  1431 => 1306,  1390 => 1267,  1335 => 1218,  1313 => 1198,  1272 => 1159,  1254 => 1143,  1225 => 1116,  1174 => 1067,  1142 => 1037,  1108 => 1005,  1077 => 976,  1046 => 947,  1013 => 916,  975 => 880,  941 => 848,  910 => 819,  876 => 787,  843 => 756,  809 => 724,  776 => 693,  745 => 664,  714 => 635,  674 => 597,  642 => 567,  608 => 535,  573 => 502,  543 => 474,  509 => 442,  476 => 411,  443 => 380,  399 => 338,  362 => 303,  312 => 255,  250 => 195,  234 => 181,  193 => 142,  150 => 104,  135 => 91,  106 => 64,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8fd6b315f19bccd6cb014e734c881ea207db3efaabcc979f8cdb00b6cc4d3781", "");
    }
}
