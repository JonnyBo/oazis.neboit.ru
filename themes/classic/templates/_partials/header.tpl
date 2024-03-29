{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-12 col-xs-12 d-flex">
              <div class="float-xs-left col-md-1">
                  <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons d-inline">&#xE5D2;</i></button>
                      <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="/content/4-about-us">О Компании</a>
                          <a class="dropdown-item" href="/content/1-dostavka-i-oplata">Доставка</a>
                          <a class="dropdown-item" href="/content/5-secure-payment">Безопасность платежей</a>
                          <a class="dropdown-item" href="/content/2-legal-notice">Правовое положение</a>
                          <a class="dropdown-item" href="/content/3-terms-and-conditions-of-use">Порядок и условия использования</a>
                          <a class="dropdown-item" href="/content/6-politika-konfidencialnosti">Политика конфиденциальности</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
                  {if $shop.logo_details}
                      {if $page.page_name == 'index'}
                          <h1>
                              {renderLogo}
                          </h1>
                      {else}
                          {renderLogo}
                      {/if}
                  {/if}
              </div>
              <div class="col-md-9">
            {hook h='displayNav1'}
              </div>
          </div>
          <div class="col-md-12 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class="text-sm-center mobile">
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="header-top-right col-md-12 col-sm-12 position-static">
          {hook h='displayTop'}
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}
