<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:53:52
  from 'module:bluepaymentviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63890650d87e86_76039005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284f70ee3fc1ffb3b031a8739e7c2b8e0201d7d5' => 
    array (
      0 => 'module:bluepaymentviewstemplates',
      1 => 1669924308,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63890650d87e86_76039005 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are waiting for payment. If you have interrupted it for any reason, please order it again.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

</p>
<p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order status','mod'=>'bluepayment'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value, ENT_QUOTES, 'UTF-8');?>

</p>
<?php }
}
