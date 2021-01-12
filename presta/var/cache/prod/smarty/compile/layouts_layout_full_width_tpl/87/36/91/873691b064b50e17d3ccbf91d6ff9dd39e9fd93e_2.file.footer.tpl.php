<?php
/* Smarty version 3.1.33, created on 2021-01-12 14:04:51
  from '/var/www/html/presta/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffd9e73b0f0f3_67816605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873691b064b50e17d3ccbf91d6ff9dd39e9fd93e' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/_partials/footer.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd9e73b0f0f3_67816605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2199084705ffd9e73b07202_62256851', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11750412125ffd9e73b0a120_73008512', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9376933555ffd9e73b0afc4_46931287', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17267910045ffd9e73b0c6f7_55468184', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_2199084705ffd9e73b07202_62256851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_2199084705ffd9e73b07202_62256851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_11750412125ffd9e73b0a120_73008512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_11750412125ffd9e73b0a120_73008512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_9376933555ffd9e73b0afc4_46931287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_9376933555ffd9e73b0afc4_46931287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_17267910045ffd9e73b0c6f7_55468184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_17267910045ffd9e73b0c6f7_55468184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="_blank" href="https://www.prestashop.com" target="_blank" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
