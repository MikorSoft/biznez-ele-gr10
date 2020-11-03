<?php
/* Smarty version 3.1.33, created on 2020-11-03 21:58:53
  from '/var/www/html/presta/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa1c48df18791_40950548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9277e3e5bc673bc6b4df47b5c417bc5c10ad224f' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/page.tpl',
      1 => 1604436412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1c48df18791_40950548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_607801405fa1c48df14d20_98683458', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18734035375fa1c48df154e1_43423387 extends Smarty_Internal_Block
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
class Block_12014563945fa1c48df150a5_31901802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18734035375fa1c48df154e1_43423387', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11111745185fa1c48df169a4_53546925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16496478405fa1c48df16e00_59347958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16465152915fa1c48df165e8_60784157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11111745185fa1c48df169a4_53546925', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16496478405fa1c48df16e00_59347958', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8576981795fa1c48df17c67_58669586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5533465485fa1c48df17875_47717954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8576981795fa1c48df17c67_58669586', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_607801405fa1c48df14d20_98683458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_607801405fa1c48df14d20_98683458',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12014563945fa1c48df150a5_31901802',
  ),
  'page_title' => 
  array (
    0 => 'Block_18734035375fa1c48df154e1_43423387',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16465152915fa1c48df165e8_60784157',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11111745185fa1c48df169a4_53546925',
  ),
  'page_content' => 
  array (
    0 => 'Block_16496478405fa1c48df16e00_59347958',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5533465485fa1c48df17875_47717954',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8576981795fa1c48df17c67_58669586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12014563945fa1c48df150a5_31901802', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16465152915fa1c48df165e8_60784157', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5533465485fa1c48df17875_47717954', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
