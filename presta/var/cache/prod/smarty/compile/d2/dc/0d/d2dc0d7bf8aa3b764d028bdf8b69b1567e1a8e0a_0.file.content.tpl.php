<?php
/* Smarty version 3.1.33, created on 2021-01-12 13:52:08
  from '/var/www/html/presta/admin663md4rmt/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffd9b78b26ad0_64123124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2dc0d7bf8aa3b764d028bdf8b69b1567e1a8e0a' => 
    array (
      0 => '/var/www/html/presta/admin663md4rmt/themes/default/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd9b78b26ad0_64123124 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}