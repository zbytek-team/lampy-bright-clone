<?php
/* Smarty version 3.1.43, created on 2022-12-02 16:06:19
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/redirect-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a146bc75883_45886597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39bdfa7279642b5767f695060036000e8754a9b3' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/redirect-info.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a146bc75883_45886597 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bm-info--small">
	<img width="22" class="bm-info--small__icon img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/info.svg" alt="Info" />
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We recommend leaving the option without redirection. If you use a one page checkout module, we recommend setting redirection to a dedicated payment page outside your store.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
