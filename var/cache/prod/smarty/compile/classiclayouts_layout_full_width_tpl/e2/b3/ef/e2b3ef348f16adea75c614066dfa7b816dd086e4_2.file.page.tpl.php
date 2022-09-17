<?php
/* Smarty version 3.1.43, created on 2022-09-17 18:59:58
  from '/var/www/p626549/data/www/oazis.neboit.ru/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6325eefe8ee359_81181561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b3ef348f16adea75c614066dfa7b816dd086e4' => 
    array (
      0 => '/var/www/p626549/data/www/oazis.neboit.ru/themes/classic/templates/page.tpl',
      1 => 1663332511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6325eefe8ee359_81181561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12796821296325eefe8e6d80_14031450', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20477127486325eefe8e8017_09316155 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_6579411766325eefe8e7590_26857421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20477127486325eefe8e8017_09316155', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13837701306325eefe8ead44_97427454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4288137856325eefe8eb812_41174150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11643082936325eefe8ea575_67543203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13837701306325eefe8ead44_97427454', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4288137856325eefe8eb812_41174150', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9115312816325eefe8ed021_53799512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16511798676325eefe8ec8b8_21134748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9115312816325eefe8ed021_53799512', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12796821296325eefe8e6d80_14031450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12796821296325eefe8e6d80_14031450',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6579411766325eefe8e7590_26857421',
  ),
  'page_title' => 
  array (
    0 => 'Block_20477127486325eefe8e8017_09316155',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11643082936325eefe8ea575_67543203',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13837701306325eefe8ead44_97427454',
  ),
  'page_content' => 
  array (
    0 => 'Block_4288137856325eefe8eb812_41174150',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16511798676325eefe8ec8b8_21134748',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9115312816325eefe8ed021_53799512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6579411766325eefe8e7590_26857421', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11643082936325eefe8ea575_67543203', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16511798676325eefe8ec8b8_21134748', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
