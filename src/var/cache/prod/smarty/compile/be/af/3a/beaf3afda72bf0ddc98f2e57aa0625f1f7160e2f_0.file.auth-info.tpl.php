<?php
/* Smarty version 3.1.43, created on 2022-12-02 16:06:19
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/auth-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a146bc3fe02_26972755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beaf3afda72bf0ddc98f2e57aa0625f1f7160e2f' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/auth-info.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a146bc3fe02_26972755 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="bm-list">
	<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You will receive the credentials from Blue Media in an email or you can find them in','mod'=>'bluepayment'),$_smarty_tpl ) );?>
 <a target="_blank" data-amplitude="true" data-amplitude-event="admin panel link clicked" href="https://oplacasie.bm.pl/admin/login?mtm_campaign=presta_shop_panel_bm&mtm_source=presta_shop_backoffice&mtm_medium=cta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'administration panel','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</a></li>
	<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you do not have an account in the Blue Media system yet,','mod'=>'bluepayment'),$_smarty_tpl ) );?>
 <a target="_blank" data-amplitude="true" data-amplitude-event="registration link clicked" href="https://platnosci.bm.pl/b753663170b4a56e91caf10ca9f779d22b07a57e8a87fc17ed77026b3ebb47c6/bo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'register.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</a></li>
</ul>
<?php }
}
