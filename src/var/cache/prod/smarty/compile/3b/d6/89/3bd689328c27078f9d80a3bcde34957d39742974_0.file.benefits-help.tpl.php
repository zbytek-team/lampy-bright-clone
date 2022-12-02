<?php
/* Smarty version 3.1.43, created on 2022-12-02 16:06:19
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/benefits-help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a146bc98801_52554095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bd689328c27078f9d80a3bcde34957d39742974' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/benefits-help.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a146bc98801_52554095 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="bm-steps">
	<li class="bm-steps__item">
		<span>1</span>
		<p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a free account on the site.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
<br/>
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
<?php }
}
