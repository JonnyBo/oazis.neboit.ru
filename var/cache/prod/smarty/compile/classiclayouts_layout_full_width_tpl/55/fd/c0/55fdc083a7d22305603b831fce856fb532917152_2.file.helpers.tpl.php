<?php
/* Smarty version 3.1.43, created on 2022-09-17 18:59:58
  from '/var/www/p626549/data/www/oazis.neboit.ru/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6325eefe9381f3_87280878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fdc083a7d22305603b831fce856fb532917152' => 
    array (
      0 => '/var/www/p626549/data/www/oazis.neboit.ru/themes/classic/templates/_partials/helpers.tpl',
      1 => 1663332511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6325eefe9381f3_87280878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/p626549/data/www/oazis.neboit.ru/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/55/fd/c0/55fdc083a7d22305603b831fce856fb532917152_2.file.helpers.tpl.php',
    'uid' => '55fdc083a7d22305603b831fce856fb532917152',
    'call_name' => 'smarty_template_function_renderLogo_21257574376325eefe930d92_13617483',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_21257574376325eefe930d92_13617483 */
if (!function_exists('smarty_template_function_renderLogo_21257574376325eefe930d92_13617483')) {
function smarty_template_function_renderLogo_21257574376325eefe930d92_13617483(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_21257574376325eefe930d92_13617483 */
}
