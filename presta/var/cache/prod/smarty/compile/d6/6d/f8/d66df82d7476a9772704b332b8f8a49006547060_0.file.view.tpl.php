<?php
/* Smarty version 3.1.33, created on 2021-01-12 13:53:44
  from '/var/www/html/presta/admin663md4rmt/themes/default/template/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffd9bd8d05f71_04601379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66df82d7476a9772704b332b8f8a49006547060' => 
    array (
      0 => '/var/www/html/presta/admin663md4rmt/themes/default/template/helpers/view/view.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd9bd8d05f71_04601379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11413109025ffd9bd8cf07e3_59827647', "leadin");
?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16208177125ffd9bd8cf1789_23019341', "override_tpl");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminView'),$_smarty_tpl ) );?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }
}
/* {block "leadin"} */
class Block_11413109025ffd9bd8cf07e3_59827647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_11413109025ffd9bd8cf07e3_59827647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "override_tpl"} */
class Block_16208177125ffd9bd8cf1789_23019341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_16208177125ffd9bd8cf1789_23019341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_tpl"} */
}
