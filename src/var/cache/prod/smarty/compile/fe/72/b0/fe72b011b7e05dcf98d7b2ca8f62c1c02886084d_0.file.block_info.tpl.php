<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:47:01
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/block_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01d5d24349_81876151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe72b011b7e05dcf98d7b2ca8f62c1c02886084d' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/block_info.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_partials/roundingSettings.tpl' => 1,
  ),
),false)) {
function content_638a01d5d24349_81876151 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
  <div>
    <p>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you encounter rounding issues with your orders, please change PrestaShop round mode in: [a @href1@]Preferences > General[/a] then change for:','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPreferences',true);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_prefixVariable2;
$_prefixVariable3 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable4 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1,array('@href1@'=>$_prefixVariable3,'@target@'=>$_prefixVariable4));?>

    </p>

    <?php $_smarty_tpl->_subTemplateRender("file:../_partials/roundingSettings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variant'=>"help"), 0, false);
?>
  </div>
</div>
<?php }
}
