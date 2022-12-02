<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:46:26
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/roundingSettingsMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01b24f3b67_16937876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ed9f39b7971c9e2ab1b76d4d3b0caa8a7fc636' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/roundingSettingsMessage.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../_partials/roundingSettings.tpl' => 1,
  ),
),false)) {
function content_638a01b24f3b67_16937876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('variant', (($tmp = @$_smarty_tpl->tpl_vars['variant']->value)===null||$tmp==='' ? 'normal' : $tmp));?>

<div class="alert alert-warning <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('hidden'=>$_smarty_tpl->tpl_vars['variant']->value == 'hidden') ));?>
" data-rounding-alert>
  <button type="button" class="close" data-dismiss="alert">×</button>
    <div>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your rounding settings are not fully compatible with PayPal requirements. In order to avoid some of the transactions to fail, please change the PrestaShop rounding mode in [a @href1@] Preferences > General[/a] to:','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPreferences',true);
$_prefixVariable8 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable9 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable7,array('@href1@'=>$_prefixVariable8,'@target@'=>$_prefixVariable9));?>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../../_partials/roundingSettings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
