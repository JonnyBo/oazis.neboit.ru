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

/* __string_template__21812fe690fa546921612e00185552b4d128b455d54656811bc00a4e6e1d77b5 */
class __TwigTemplate_12c316d879eb77b2e60019ddd3214bfb8489594ce6a4558ef6e64f3c4f2376e1 extends \Twig\Template
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
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Управление модулями • Oasis-light</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = 'aa5e9323385ed279d0bf0bebc59d53c6';
    var token_admin_orders = tokenAdminOrders = '64b14b7af32a982be3f7876c8a165da9';
    var token_admin_customers = '66c84d4090b13b63f3011f25a29aa0cf';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '4c374fa4b524e7e815ceaed016e91c63';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'ca2ed1da7dcc2a53eb9684d34f0d2ba5';
    var choose_language_translate = 'Выберите язык:';
    var default_language = '1';
    var admin_modules_link = '/admin209ylxjvk/index.php/improve/modules/cat";
        // line 41
        echo "alog/recommended?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso';
    var admin_notification_get_link = '/admin209ylxjvk/index.php/common/notifications?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso';
    var admin_notification_push_link = adminNotificationPushLink = '/admin209ylxjvk/index.php/common/notifications/ack?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso';
    var tab_modules_list = '';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/admin209ylxjvk/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin209ylxjvk/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin209ylxjvk\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin209ylxjvk\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u20bd\",\"name\":\"\\u0420\\u043e\\u0441\\u0441\\u043";
        // line 64
        echo "8\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"RUB\",\"currencySymbol\":\"\\u20bd\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin209ylxjvk/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/admin209ylxjvk/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin209ylxjvk/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=";
        // line 82
        echo "\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin209ylxjvk/index.php/common/notifications?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/oazis.neboit.ru\\/admin209ylxjvk\\/index.php?controller=AdminGamification&token=62322ad5faf633b251f9e95c472a0260\";
            var current_id_tab = 45;
        </script>

";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-ru adminmodulesmanage\"
  data-base-url=\"/admin209ylxjvk/index.php\"  data-token=\"tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminDashboard&amp;token=5d91066368114bfa186c48475ec7e44f\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminOrders&amp;token=64b14b7af32a982be3f7876c8a165da9\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php/sell/catalog/categories/new?token=b8dab4618c88794a9038f9acd65359a0\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=0bf195568c0cdba215c513560ffe44a9\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php/sell/catalog/products/new?token=b8dab4618c88794a9038f9acd65359a0\"
                 data-item=\"Новый товар\"
  ";
        // line 142
        echo "    >Новый товар</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ff2347a9ff08f1f72507e95393e905fa\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php/improve/modules/manage?token=b8dab4618c88794a9038f9acd65359a0\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"7\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\"
        data-post-link=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminQuickAccesses&token=822dd71796922507cc0726a251249d84\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Модули - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminQuickAccesses&token=822dd71796922507cc0726a251249d84\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin209ylxjvk/index.php?controller=AdminSearch&amp;token=75a0d9d5b7425ff27f0e3c6c854a1d4f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" cl";
        // line 179
        echo "ass=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"Имя\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер счёта\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID К";
        // line 194
        echo "орзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
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
    <a class=\"link\" id=\"header_shopname\" href=\"https://oazis.neboit.ru/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Перейти в магазин</span>
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
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                 ";
        // line 242
        echo "   <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Вы проверяли <strong><a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7a7a66ce5dbc213aeaa25b74d5624c9e\">брошенные корзины</a></strong>?<br>Ваш следующий заказ может скрываться там!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notifica";
        // line 285
        echo "tion\">
              Пока нет сообщений.<br>
              Видимо, все ваши клиенты счастливы :)
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
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://oazis.neboit.ru/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">С возвращением, Admin</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin209ylxjvk/index.php/configure/advanced/employees/1/edit?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\">
      <i class=\"material-icons\">edit</i>
      <span>Ваш профиль</span>
    </a>
  ";
        // line 334
        echo "  </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Ресурсы</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Тренировка</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Найти профессионала</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Маркет PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Справочный центр</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminLogin&amp;logout=1&amp;token=0e3fb429f2ae7e3602233f8a885a6bea\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin209ylxjvk/index.php/configure/advanced/employees/toggl";
        // line 354
        echo "e-navigation?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminDashboard&amp;token=5d91066368114bfa186c48475ec7e44f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Продажа</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin209ylxjvk/index.php/sell/orders/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Заказы
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
 ";
        // line 398
        echo "                             <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin209ylxjvk/index.php/sell/orders/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Заказы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin209ylxjvk/index.php/sell/orders/invoices/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> По счетам
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin209ylxjvk/index.php/sell/orders/credit-slips/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Платежные квитанции
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin209ylxjvk/index.php/sell/orders/delivery-slips/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Транспортные накладные
                                </a>
                              </li>

                                                ";
        // line 427
        echo "                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCarts&amp;token=7a7a66ce5dbc213aeaa25b74d5624c9e\" class=\"link\"> Корзины
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin209ylxjvk/index.php/sell/catalog/products?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Каталог
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin209ylxjvk/index.php/sell/catalog/products?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Товары
                                ";
        // line 457
        echo "</a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin209ylxjvk/index.php/sell/catalog/categories?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Категории
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin209ylxjvk/index.php/sell/catalog/monitoring/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Мониторинг
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminAttributesGroups&amp;token=bbc7a2e69cf99c6c12d274de8dbf5ed9\" class=\"link\"> Атрибуты и характеристики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                    ";
        // line 488
        echo "            <a href=\"/admin209ylxjvk/index.php/sell/catalog/brands/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Бренды и Поставщики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin209ylxjvk/index.php/sell/attachments/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Файлы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCartRules&amp;token=0bf195568c0cdba215c513560ffe44a9\" class=\"link\"> Скидки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin209ylxjvk/index.php/sell/stocks/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Запасы
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
   ";
        // line 519
        echo "               
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin209ylxjvk/index.php/sell/customers/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Клиенты
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin209ylxjvk/index.php/sell/customers/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Клиенты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin209ylxjvk/index.php/sell/addresses/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Адреса
                                </a>
                              </li>

                                                                                          ";
        // line 549
        echo "                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCustomerThreads&amp;token=4c374fa4b524e7e815ceaed016e91c63\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Клиентская служба
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCustomerThreads&amp;token=4c374fa4b524e7e815ceaed016e91c63\" class=\"link\"> Клиентская служба
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin209ylxjvk/index.php/sell/customer-servi";
        // line 578
        echo "ce/order-messages/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Сообщения о заказах
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminReturn&amp;token=33656e7b0c6e20cbf49a0c0474f9042d\" class=\"link\"> Возвраты товаров
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin209ylxjvk/index.php/modules/metrics/legacy/stats?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Статистика
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
              ";
        // line 610
        echo "                <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin209ylxjvk/index.php/modules/metrics/legacy/stats?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Статистика
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin209ylxjvk/index.php/modules/metrics?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Улучшения</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin209ylxjvk/index.php/improve/modules/manage?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Модули
                      </span>
                                                    <i clas";
        // line 645
        echo "s=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin209ylxjvk/index.php/improve/modules/manage?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin209ylxjvk/index.php/modules/addons/modules/catalog?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Каталог модулей
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin209ylxjvk/index.php/improve/design/themes/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmw";
        // line 673
        echo "Khizuso\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Дизайн
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin209ylxjvk/index.php/improve/design/themes/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Шаблон и логотип
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin209ylxjvk/index.php/modules/addons/themes/catalog?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Каталог шаблонов
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
          ";
        // line 703
        echo "                      <a href=\"/admin209ylxjvk/index.php/improve/design/mail_theme/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Шаблон письма
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin209ylxjvk/index.php/improve/design/cms-pages/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Страницы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin209ylxjvk/index.php/improve/design/modules/positions/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Расположение блоков
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminImages&amp;token=afcc8aec15a78035cd800e3ecf89eb2d\" class=\"link\"> Настройки изображений
                                </a>
                              </li>

                                                                                  
               ";
        // line 732
        echo "               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin209ylxjvk/index.php/modules/link-widget/list?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Список ссылок
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCarriers&amp;token=bc5610927ac83b6e629dbb54d87f2f9f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Доставка
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminCarriers&amp;token=bc5610927ac83b6e629dbb54d87f2f9f\" class=\"link\"> Перевозчики
 ";
        // line 761
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin209ylxjvk/index.php/improve/shipping/preferences/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Настройки
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin209ylxjvk/index.php/improve/payment/payment_methods?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Оплата
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin209ylxjvk/in";
        // line 793
        echo "dex.php/improve/payment/payment_methods?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Способы оплаты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin209ylxjvk/index.php/improve/payment/preferences?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Настройки
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin209ylxjvk/index.php/improve/international/localization/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Интернационализация
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                             ";
        // line 824
        echo "               
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin209ylxjvk/index.php/improve/international/localization/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Локализация
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin209ylxjvk/index.php/improve/international/zones/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> География
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin209ylxjvk/index.php/improve/international/taxes/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Налоги
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin209ylxjvk/index.php/improve/international/translations/settings?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Переводы
                                </a>
                              ";
        // line 852
        echo "</li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminPsfacebookModule&amp;token=e25a6a2fadb4d774fe7dd5dc0d6d3663\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Маркетинг
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminPsfacebookModule&amp;token=e25a6a2fadb4d774fe7dd5dc0d6d3663\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://oazis.neboit.ru/admin209y";
        // line 883
        echo "lxjvk/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=438878fcd94ad88551aea073000b339f\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Настроить</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin209ylxjvk/index.php/configure/shop/preferences/preferences?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Параметры магазина
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin209ylxjvk/index.php/configure/shop/preferences/preferences?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmw";
        // line 918
        echo "Khizuso\" class=\"link\"> Общее
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin209ylxjvk/index.php/configure/shop/order-preferences/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Настройки заказов
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin209ylxjvk/index.php/configure/shop/product-preferences/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Настройки товаров
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin209ylxjvk/index.php/configure/shop/customer-preferences/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Настройки клиента
                                </a>
                              </li>

                                                                                  
                              
                                                            
                        ";
        // line 949
        echo "      <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin209ylxjvk/index.php/configure/shop/contacts/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Контакты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin209ylxjvk/index.php/configure/shop/seo-urls/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Трафик и SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminSearchConf&amp;token=b44100e7b9d02ef08201f23bf545e5f3\" class=\"link\"> Поиск
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminGamification&amp;token=62322ad5faf633b251f9e95c472a0260\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                            ";
        // line 978
        echo "                                  </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin209ylxjvk/index.php/configure/advanced/system-information/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Расширенные параметры
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/system-information/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Информация
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced";
        // line 1007
        echo "/performance/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Производительность
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/administration/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Администрирование
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/emails/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/import/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Импорт
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li ";
        // line 1038
        echo "class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/employees/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Сотрудники
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/sql-requests/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> База данных
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/logs/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Журнал событий
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/webservice-keys/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Веб службы
                                </a>
                              </li>

                                             ";
        // line 1067
        echo "                                                                                                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin209ylxjvk/index.php/configure/advanced/feature-flags/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Запуск магазина!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Продолжить</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Остановить</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin209ylxjvk/index.php/improve/modules/manage?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" aria-current=\"page\">Модули</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Управление модулями          </h1";
        // line 1121
        echo ">
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Загрузить модуль\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Загрузить модуль
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Подключиться к магазину расширений\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Подключиться к магазину расширений
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin209ylxjvk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.7%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">";
        // line 1160
        echo "
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class=\"nav-item\">
                    <a href=\"/admin209ylxjvk/index.php/improve/modules/manage?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Модули
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin209ylxjvk/index.php/improve/modules/alerts?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Оповещения
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin209ylxjvk/index.php/improve/modules/updates?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      ";
        // line 1179
        echo "Обновления
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Загрузить модуль\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
          ";
        // line 1199
        echo "    Загрузить модуль
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Подключиться к магазину расширений\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Подключиться к магазину расширений
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Помощь\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin209ylxjvk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.7%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\"
            >
              Помощь
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Рекомендованные Модули и Сервисы',
        'Close': 'Закрыть',
      },
      recommendedModulesUrl: '/admin209ylxjvk/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div cla";
        // line 1243
        echo "ss=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Продолжить</button>
  <a class=\"onboarding-button-shut-down\">Пропустить этот урок</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u0414\\u043e\\u0431\\u0440\\u043e \\u043f\\u043e\\u0436\\u0430\\u043b\\u043e\\u0432\\u0430\\u0442\\u044c!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0432\\u0435\\u0442! \\u041c\\u0435\\u043d\\u044f \\u0437\\u043e\\u0432\\u0443\\u0442 \\u041f\\u0440\\u0435\\u0441\\u0442\\u043e\\u043d, \\u044f \\u043c\\u043e\\u0433\\u0443 \\u0432\\u0430\\u043c \\u0437\\u0434\\u0435\\u0441\\u044c \\u0432\\u0441\\u0451 \\u043f\\u043e\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c.<\\/p>\\n    <p>\\u0412\\u0430\\u043c \\u0441\\u0442\\u043e\\u0438\\u0442 \\u043e";
        // line 1278
        echo "\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u0438\\u0442\\u044c\\u0441\\u044f \\u0441 \\u043d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u043c\\u0438 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u044b\\u043c\\u0438 \\u0448\\u0430\\u0433\\u0430\\u043c\\u0438 \\u0434\\u043b\\u044f \\u0437\\u0430\\u043f\\u0443\\u0441\\u043a\\u0430 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0430:\\n    \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0443 \\u0438 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0438...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0441\\u0442\\u0443\\u043f\\u0438\\u043c!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u041f\\u043e\\u0437\\u0436\\u0435<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">\\u041f\\u0443\\u0441\\u043a<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/oazis.neboit.ru\\/admin209ylxjvk\\/index.php?controller=AdminDashboard&token=5d91066368114bfa186c48475ec7e44f\"}]},{\"name\":\"product\",\"title\":\"\\u0414\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0437\\u0434\\u0430\\u0434\\u0438\\u043c \\u0412\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440\",\"subtitle\":{\"1\":\"\\u0427\\u0442\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0441\\u043e\\u043e\\u0431\\u0449\\u0438\\u0442\\u044c \\u043e\\u0431 \\u044d\\u0442\\u043e\\u043c? \\u041f\\u043e\\u0434\\u0443\\u043c\\u0430\\u0439\\u0442\\u0435, \\u0447\\u0442\\u043e \\u0445\\u043e\\u0442\\u044f\\u0442 \\u0443\\u0437\\u043d\\u0430\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b.\",\"2\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0";
        echo "44f\\u0441\\u043d\\u0443\\u044e \\u0438 \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e. \\u041f\\u043e\\u0437\\u0436\\u0435 \\u0435\\u0451 \\u043c\\u043e\\u0436\\u043d\\u043e \\u0438\\u0441\\u043f\\u0440\\u0430\\u0432\\u0438\\u0442\\u044c :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0414\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0442\\u043e\\u0432\\u0430\\u0440\\u0443 \\u0438\\u043d\\u0442\\u0435\\u0440\\u0435\\u0441\\u043d\\u043e\\u0435 \\u043d\\u0430\\u0437\\u0432\\u0430\\u043d\\u0438\\u0435.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin209ylxjvk\\/index.php\\/sell\\/catalog\\/products\\/new?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\",\"admin209ylxjvk\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0430\\u043f\\u043e\\u043b\\u043d\\u0438\\u0442\\u0435 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e \\u0432 \\u044d\\u0442\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435. \\u0414\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0438 \\u0434\\u043b\\u044f \\u0440\\u0430\\u0441\\u0448\\u0438\\u0440\\u0435\\u043d\\u043d\\u043e\\u0439 \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u0438.\",\"page\":\"admin209ylxjvk\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u043e\\u0434\\u043d\\u043e \\u0438\\u043b\\u0438 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0438\\u0437\\u043e\\u0431\\u0440\\u0430\\u0436\\u0435\\u043d\\u0438\\u0439, \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u0430\\u0448 \\u0442\\u043e\\u0432\\u0430\\u0440 \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u043b \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e!\",\"page\":\"admin209ylxjvk\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images";
        echo "-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u041a\\u0430\\u043a \\u0434\\u043e\\u0440\\u043e\\u0433\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u043f\\u0440\\u043e\\u0434\\u0430\\u0432\\u0430\\u0442\\u044c?\",\"page\":\"admin209ylxjvk\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u0423\\u0445! \\u0412\\u044b \\u0442\\u043e\\u043b\\u044c\\u043a\\u043e \\u0447\\u0442\\u043e \\u0441\\u043e\\u0437\\u0434\\u0430\\u043b\\u0438 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440. \\u0417\\u0434\\u043e\\u0440\\u043e\\u0432\\u043e, \\u043d\\u0435 \\u0442\\u0430\\u043a \\u043b\\u0438?\",\"page\":\"admin209ylxjvk\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"\\u041f\\u0440\\u0438\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0443 \\u0438\\u043d\\u0434\\u0438\\u0432\\u0438\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u043e\\u0441\\u0442\\u044c\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u043f\\u043e-\\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0434\\u043e\\u043b\\u0436\\u0435\\u043d \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u0442\\u044c \\u0432\\u0430\\u0448 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d? \\u0427\\u0442\\u043e \\u0434\\u0435\\u043b\\u0430\\u0435\\u0442 \\u0435\\u0433\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u044b\\u043c?\",\"2\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d \\u0438\\u043b\\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u043b\\u0438\\u0443\\u0447\\u0448\\u0438\\u0439 \\u0432 \\u043d\\u0430\\u0448\\u0435\\u043c \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433\\u0435 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432.\"},\"steps";
        echo "\":[{\"type\":\"tooltip\",\"text\":\"\\u0425\\u043e\\u0440\\u043e\\u0448\\u0430\\u044f \\u0438\\u0434\\u0435\\u044f - \\u043d\\u0430\\u0447\\u0430\\u0442\\u044c \\u0441 \\u0437\\u0430\\u0434\\u0430\\u043d\\u0438\\u044f \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u043b\\u043e\\u0433\\u043e\\u0442\\u0438\\u043f\\u0430!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin209ylxjvk\\/index.php\\/improve\\/design\\/themes\\/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0415\\u0441\\u043b\\u0438 \\u0432\\u0430\\u043c \\u043d\\u0443\\u0436\\u043d\\u043e \\u0447\\u0442\\u043e-\\u0442\\u043e \\u0434\\u0435\\u0439\\u0441\\u0442\\u0432\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u043e\\u0435, \\u043f\\u043e\\u0441\\u0435\\u0442\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448 \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432!\",\"page\":\"\\/admin209ylxjvk\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=tLR-lFEyO46eclm_I0bc__wG4zdhHaxTMQmwKhizuso\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"\\u041f\\u043e\\u0434\\u0433\\u043e\\u0442\\u043e\\u0432\\u0438\\u0442\\u044c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u043a \\u043f\\u0440\\u0438\\u0435\\u043c\\u0443 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b \\u0434\\u043e\\u043b\\u0436\\u043d\\u044b \\u0440\\u0430\\u0441\\u043f\\u043b\\u0430\\u0447\\u0438\\u0432\\u0430\\u0442\\u044c\\u0441\\u044f \\u0441 \\u0432\\u0430\\u043c\\u0438?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0421\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b, \\u0443\\u0436\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin209ylxjvk\\/index.php\\/improve\\/payment\\/payment_methods?_token=tLR-lFEyO46eclm_I0bc__";
        echo "wG4zdhHaxTMQmwKhizuso\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u043a\\u0430 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043b\\u044f\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u0442\\u043e\\u0432\\u0430\\u0440\\u044b?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0412\\u043e\\u0442 \\u0441\\u043f\\u0438\\u0441\\u043e\\u043a \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0445 \\u0432 \\u0432\\u0430\\u0448\\u0435\\u043c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/oazis.neboit.ru\\/admin209ylxjvk\\/index.php?controller=AdminCarriers&token=bc5610927ac83b6e629dbb54d87f2f9f\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u0412\\u0430\\u043c \\u0434\\u043e\\u0441\\u0442\\u0430\\u0442\\u043e\\u0447\\u043d\\u043e!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          \\u0412\\u044b \\u0443\\u0432\\u0438\\u0434\\u0435\\u043b\\u0438 \\u043c\\u0438\\u043d\\u0438\\u043c\\u0443\\u043c, \\u043d\\u043e \\u0437\\u0434\\u0435\\u0441\\u044c \\u0435\\u0441\\u0442\\u044c \\u0433\\u043e\\u0440\\u0430\\u0437\\u0434\\u043e \\u0431\\u043e\\u043b\\u044c\\u0448\\u0435 \\u0432\\u0435\\u0449\\u0435\\u0439 \\u0434\\u043b\\u044f \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f.<br \\/>\\n          \\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u0440\\u0435\\u0441\\u0443\\u0440\\u0441\\u044b, \\u0434\\u043b\\u044f \\u";
        echo "043f\\u043e\\u043c\\u043e\\u0449\\u0438 \\u0432\\u0430\\u043c \\u0432 \\u0434\\u0430\\u043b\\u044c\\u043d\\u0435\\u0439\\u0448\\u0435\\u043c:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0420\\u0443\\u043a\\u043e\\u0432\\u043e\\u0434\\u0441\\u0442\\u0432\\u043e \\u043d\\u0430\\u0447\\u0438\\u043d\\u0430\\u044e\\u0449\\u0435\\u0433\\u043e<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0424\\u043e\\u0440\\u0443\\u043c<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0422\\u0440\\u0435\\u043d\\u0438\\u0440\\u043e\\u0432\\u043a\\u0430<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0412\\u0438\\u0434\\u0435\\u043e\\u0443\\u0440\\u043e\\u043a\\u0438<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n    ";
        echo "    <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">\\u042f \\u0433\\u043e\\u0442\\u043e\\u0432<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/oazis.neboit.ru\\/admin209ylxjvk\\/index.php?controller=AdminDashboard&token=5d91066368114bfa186c48475ec7e44f\"}]}]}, 1, \"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminWelcome&token=931fa39ddb3f298d69f2cf3407f0cc41\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Ау! Вы потерялись?</p>    <p>Для продолжения кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Продолжить</button>    </div>    <p>Если хотите совсем остановить урок, кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Выход из Приветственного урока</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Шаг <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Вперед</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      ";
        // line 1294
        echo "} else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1318
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
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"https://oazis.neboit.ru/admin209ylxjvk/index.php?controller=AdminDashboard&amp;token=5d91066368114bfa186c48475ec7e44f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=admin%40neboit.ru&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Foazis.neboit.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin209ylxjvk/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Под";
        // line 1364
        echo "ключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=admin%40neboit.ru&amp;firstnam";
        // line 1398
        echo "e=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Foazis.neboit.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
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
        // line 1426
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1318
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

    // line 1426
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
        return "__string_template__21812fe690fa546921612e00185552b4d128b455d54656811bc00a4e6e1d77b5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1602 => 1426,  1585 => 1318,  1576 => 106,  1567 => 1426,  1537 => 1398,  1501 => 1364,  1449 => 1318,  1423 => 1294,  1399 => 1278,  1362 => 1243,  1316 => 1199,  1294 => 1179,  1273 => 1160,  1232 => 1121,  1176 => 1067,  1145 => 1038,  1112 => 1007,  1081 => 978,  1050 => 949,  1017 => 918,  980 => 883,  947 => 852,  917 => 824,  884 => 793,  850 => 761,  819 => 732,  788 => 703,  756 => 673,  726 => 645,  689 => 610,  655 => 578,  624 => 549,  592 => 519,  559 => 488,  526 => 457,  494 => 427,  463 => 398,  417 => 354,  395 => 334,  344 => 285,  299 => 242,  249 => 194,  232 => 179,  193 => 142,  152 => 106,  126 => 82,  106 => 64,  81 => 41,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__21812fe690fa546921612e00185552b4d128b455d54656811bc00a4e6e1d77b5", "");
    }
}
