<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:52:00
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/ga-events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638905e012d803_79456310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '774394190f6ea4df28884a81272cb5a1d9034f36' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/ga-events.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638905e012d803_79456310 (Smarty_Internal_Template $_smarty_tpl) {
?><span>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below you will find a list of events and their assigned actions, which will be visible in your Google Analytics dashboard after connection.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

</span>

<table class="bm-admin-events">
	<thead>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Event name','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View the product in the list','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered for each product that is listed and visible to the customer while browsing the site.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the product','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered when the product link is clicked. This can be done on any list on the page.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See product details','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered when a user visits a specific product page. The event should be triggered when the page is displayed/loaded.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add product to cart','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered when the user adds the product to the cart.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove product from cart','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered when the user removes a product from the shopping cart.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start the order process','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered when the user goes to checkout.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	<tr>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Completion of the transaction','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
		<td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The event should be triggered when the transaction is successfully completed. It should be sent on the server side so that we know exactly that the transaction has been completed, even if the client has not returned to the thank you page.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</td>
	</tr>
	</tbody>
</table>
<?php }
}
