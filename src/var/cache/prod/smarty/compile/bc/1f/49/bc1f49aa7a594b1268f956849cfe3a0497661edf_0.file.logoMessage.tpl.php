<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:47:01
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/logoMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01d5d290b3_72070544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc1f49aa7a594b1268f956849cfe3a0497661edf' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/logoMessage.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a01d5d290b3_72070544 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you are using PayPal Checkout redirect you can customize your shop logo. The logo can be changed via your business profile [a @href1@]settings[/a].','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['settingLink']->value;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo 'target="_blank"';
$_prefixVariable7 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable5,array('@href1@'=>$_prefixVariable6,'@target@'=>$_prefixVariable7));?>

</div>

<?php }
}
