<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:46:26
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/headerLogo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01b25038d7_87308846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6adc34b141a8446e7bb383bfb408378cb9621443' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/headerLogo.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a01b25038d7_87308846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel active-panel pp__flex pp__align-items-center">
	<div class="pp__pr-4">
		<img style="width: 135px" src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
paypal/views/img/paypal.png">
	</div>
	<div class="pp__pl-5">
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate the PayPal module to start selling to +300M PayPal customers around the globe','mod'=>'paypal'),$_smarty_tpl ) );?>
.
		</p>
		<?php if ((isset($_smarty_tpl->tpl_vars['headerToolBar']->value)) && $_smarty_tpl->tpl_vars['headerToolBar']->value) {?>
        	<?php if ((isset($_smarty_tpl->tpl_vars['methodType']->value)) && $_smarty_tpl->tpl_vars['methodType']->value == 'EC') {?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate in three easy steps','mod'=>'paypal'),$_smarty_tpl ) );?>
: </p>
			<?php } else { ?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate in two easy steps','mod'=>'paypal'),$_smarty_tpl ) );?>
: </p>
        	<?php }?>

			<p>
				<ul>
					<li>
						<a href="#pp_config_account" data-pp-link-settings> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect below your existing PayPal account or create a new one','mod'=>'paypal'),$_smarty_tpl ) );?>
.</a>
					</li>

					<?php if ((isset($_smarty_tpl->tpl_vars['methodType']->value)) && $_smarty_tpl->tpl_vars['methodType']->value == 'EC') {?>
						<li>
							<a href="#pp_config_payment" data-pp-link-settings> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adjust your Payment setting to either capture payments instantly (Sale), or after you confirm the order (Authorize)','mod'=>'paypal'),$_smarty_tpl ) );?>
.</a>
						</li>
					<?php }?>

					<li>
						<a href="#pp_config_environment" data-pp-link-settings> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make sure the module is set to Production mode','mod'=>'paypal'),$_smarty_tpl ) );?>
.</a>
					</li>
				</ul>
			</p>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voilà! Your store is ready to accept payments!','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	</div>
</div>

<?php }
}
