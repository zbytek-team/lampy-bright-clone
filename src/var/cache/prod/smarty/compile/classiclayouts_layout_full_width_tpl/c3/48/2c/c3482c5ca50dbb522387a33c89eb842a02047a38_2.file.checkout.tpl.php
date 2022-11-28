<?php
/* Smarty version 3.1.43, created on 2022-11-28 16:24:20
  from '/var/www/html/themes/classic/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6384d2a48698d0_21680754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3482c5ca50dbb522387a33c89eb842a02047a38' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/checkout.tpl',
      1 => 1669644306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/header.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
  ),
),false)) {
function content_6384d2a48698d0_21680754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2338066336384d2a4866041_80833516', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13894734696384d2a4866e30_55104342', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16987599216384d2a4869115_94395818', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
class Block_2338066336384d2a4866041_80833516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2338066336384d2a4866041_80833516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'checkout_process'} */
class Block_15480647846384d2a4867124_61761417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'cart_summary'} */
class Block_8060315416384d2a4867f58_53784280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_13894734696384d2a4866e30_55104342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13894734696384d2a4866e30_55104342',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_15480647846384d2a4867124_61761417',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_8060315416384d2a4867f58_53784280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row">
      <div class="cart-grid-body col-xs-12 col-lg-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15480647846384d2a4867124_61761417', 'checkout_process', $this->tplIndex);
?>

      </div>
      <div class="cart-grid-right col-xs-12 col-lg-4">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8060315416384d2a4867f58_53784280', 'cart_summary', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_16987599216384d2a4869115_94395818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16987599216384d2a4869115_94395818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
