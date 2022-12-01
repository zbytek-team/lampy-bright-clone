<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:52:00
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/promote-icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638905e011c0c8_18890701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b6e9c136717a889ca025bf808ddbfba1d74ef7' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/promote-icons.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638905e011c0c8_18890701 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bm-icons">
	<div class="bm-icons__item">
		<img class="bm-icons__img" width="32" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
helpers/promote-icon1.png"
		     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increased sales','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increased sales','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</div>
	<div class="bm-icons__item">
		<img class="bm-icons__img" width="32" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
helpers/promote-icon2.png"
		     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fewer abandoned shopping carts','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fewer abandoned shopping carts','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</div>
	<div class="bm-icons__item">
		<img class="bm-icons__img" width="32" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
helpers/promote-icon3.png"
		     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More customers','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More customers','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</div>
</div>

<span>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers are more likely to buy products, even at a higher price, if they can pay later or spreadtherepayment over installments.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	<a target="_blank" href="https://developers.bluemedia.pl/platnosci-ratalne-i-odroczone">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</a>
</span>
<?php }
}
