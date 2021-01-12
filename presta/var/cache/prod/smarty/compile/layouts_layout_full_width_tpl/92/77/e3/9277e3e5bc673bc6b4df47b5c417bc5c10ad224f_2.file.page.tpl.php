<?php
/* Smarty version 3.1.33, created on 2021-01-12 14:04:51
  from '/var/www/html/presta/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffd9e739c6c36_32091041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9277e3e5bc673bc6b4df47b5c417bc5c10ad224f' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/page.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd9e739c6c36_32091041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11434664405ffd9e739c0bc4_78640957', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9892708705ffd9e739c18a0_03757404 extends Smarty_Internal_Block
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
class Block_11970013135ffd9e739c1191_41330312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9892708705ffd9e739c18a0_03757404', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9987439555ffd9e739c4476_09516334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20364401175ffd9e739c4c67_61607620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_50904275ffd9e739c35d7_38106728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9987439555ffd9e739c4476_09516334', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20364401175ffd9e739c4c67_61607620', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_13879323045ffd9e739c5f49_06741465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7357635745ffd9e739c57a0_15542196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13879323045ffd9e739c5f49_06741465', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11434664405ffd9e739c0bc4_78640957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11434664405ffd9e739c0bc4_78640957',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11970013135ffd9e739c1191_41330312',
  ),
  'page_title' => 
  array (
    0 => 'Block_9892708705ffd9e739c18a0_03757404',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_50904275ffd9e739c35d7_38106728',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9987439555ffd9e739c4476_09516334',
  ),
  'page_content' => 
  array (
    0 => 'Block_20364401175ffd9e739c4c67_61607620',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7357635745ffd9e739c57a0_15542196',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13879323045ffd9e739c5f49_06741465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11970013135ffd9e739c1191_41330312', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50904275ffd9e739c35d7_38106728', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7357635745ffd9e739c57a0_15542196', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
