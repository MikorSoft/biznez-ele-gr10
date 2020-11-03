<?php
/* Smarty version 3.1.33, created on 2020-11-03 21:58:53
  from '/var/www/html/presta/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa1c48df12ad3_49394937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a956fb77b31ed4be09bed2d7fe719081a497fc' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/index.tpl',
      1 => 1604436412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1c48df12ad3_49394937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19952314715fa1c48df11203_96270728', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_21243772385fa1c48df115e1_75318377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15908096775fa1c48df11de7_82384350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_19993077205fa1c48df11ae3_67768835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15908096775fa1c48df11de7_82384350', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19952314715fa1c48df11203_96270728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19952314715fa1c48df11203_96270728',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21243772385fa1c48df115e1_75318377',
  ),
  'page_content' => 
  array (
    0 => 'Block_19993077205fa1c48df11ae3_67768835',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15908096775fa1c48df11de7_82384350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21243772385fa1c48df115e1_75318377', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19993077205fa1c48df11ae3_67768835', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
