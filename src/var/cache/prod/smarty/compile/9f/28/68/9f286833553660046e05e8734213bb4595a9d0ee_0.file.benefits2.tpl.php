<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:52:00
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/benefits2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638905e0042e49_26944498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f286833553660046e05e8734213bb4595a9d0ee' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/benefits2.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638905e0042e49_26944498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HOW TO START?','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</div>

	<ul class="bm-steps">
		<li class="bm-steps__item">
			<span>1</span>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a free account on the site.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
<br />
				<a href="https://platnosci.bm.pl/?pk_campaign=presta_shop_panel&pk_source=presta_shop_panel&pk_medium=cta">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</a>
			</p>
		</li>
		<li class="bm-steps__item">
			<span>2</span>
			<p>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your company details and confirm them with a verification transfer.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</p>
		</li>
		<li class="bm-steps__item">
			<span>3</span>
			<p>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set up payments in your store.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</p>
		</li>
	</ul>
	<p style="width: 100%">
		<a href="https://developers.bluemedia.pl/online/wdrozenie-krok-po-kroku?mtm_campaign=presta_shop_developers_aktywacja_platnosci&mtm_source=presta_shop_backend&mtm_medium=hyperlink"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</a>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about implementing payments in your store.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</p>

</div>
<?php }
}
