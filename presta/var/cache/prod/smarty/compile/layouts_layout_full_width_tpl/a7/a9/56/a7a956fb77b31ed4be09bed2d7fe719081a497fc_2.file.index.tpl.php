<?php
/* Smarty version 3.1.33, created on 2021-01-12 14:05:05
  from '/var/www/html/presta/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffd9e81bb1444_64630217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a956fb77b31ed4be09bed2d7fe719081a497fc' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/index.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd9e81bb1444_64630217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15488042775ffd9e81badad7_32864834', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10148887985ffd9e81bae2c1_97548737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_11994719605ffd9e81bafca4_20752583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1503069295ffd9e81baec97_95156515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11994719605ffd9e81bafca4_20752583', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15488042775ffd9e81badad7_32864834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15488042775ffd9e81badad7_32864834',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10148887985ffd9e81bae2c1_97548737',
  ),
  'page_content' => 
  array (
    0 => 'Block_1503069295ffd9e81baec97_95156515',
  ),
  'hook_home' => 
  array (
    0 => 'Block_11994719605ffd9e81bafca4_20752583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10148887985ffd9e81bae2c1_97548737', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1503069295ffd9e81baec97_95156515', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
