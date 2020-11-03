<?php
/* Smarty version 3.1.33, created on 2020-11-03 22:03:34
  from '/var/www/html/presta/themes/classic/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa1c5a67e5a14_94663042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a230a304baf6ee37d2789877af1f48ce4ac7b24' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1604436412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1c5a67e5a14_94663042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21362919175fa1c5a67e3ec5_76153978', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_21362919175fa1c5a67e3ec5_76153978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_21362919175fa1c5a67e3ec5_76153978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
