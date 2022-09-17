<?php
/* Smarty version 3.1.43, created on 2022-09-17 18:59:57
  from '/var/www/p626549/data/www/oazis.neboit.ru/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6325eefd3ff840_12365809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c84ce5c1f17045f21ac4e9e73f8128eb6c815ac' => 
    array (
      0 => '/var/www/p626549/data/www/oazis.neboit.ru/themes/classic/templates/index.tpl',
      1 => 1663332511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6325eefd3ff840_12365809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18701485866325eefd3fbee8_73452396', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9198835016325eefd3fc814_83484850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_17333712646325eefd3fdc59_75684728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_7357544136325eefd3fd421_49581738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17333712646325eefd3fdc59_75684728', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18701485866325eefd3fbee8_73452396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18701485866325eefd3fbee8_73452396',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9198835016325eefd3fc814_83484850',
  ),
  'page_content' => 
  array (
    0 => 'Block_7357544136325eefd3fd421_49581738',
  ),
  'hook_home' => 
  array (
    0 => 'Block_17333712646325eefd3fdc59_75684728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9198835016325eefd3fc814_83484850', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7357544136325eefd3fd421_49581738', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
