<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:52:00
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/container_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638905e0108e03_09566689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd279854a8bfd6f281eecf24ad0014d4c06512abd' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/container_list.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form/notification-position.tpl' => 1,
  ),
),false)) {
function content_638905e0108e03_09566689 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel paymentList">
	<div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment list','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['l']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['transfer_payments']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfer_payments']->value, 'currency', false, 'key');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
			<div class="modal fade" id="Przelew_internetowy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" tabindex="-1" role="dialog"
			     aria-labelledby="Przelew_internetowy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h2>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of supported banks','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div id="blue_payway" class="bluepayment-gateways">
								<div class="bluepayment-gateways__wrap">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currency']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
										<div class="bluepayment-gateways__item">
											<label for="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
												<img class="bluepayment-gateways__img"
												     src="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_logo_url'];?>
"
												     alt="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
												<span class="bluepayment-gateways__name">
													<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>

												</span>
											</label>
										</div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>


    <?php if ((isset($_smarty_tpl->tpl_vars['wallets']->value)) && is_array($_smarty_tpl->tpl_vars['wallets']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wallets']->value, 'currency', false, 'key');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
			<div class="modal fade" id="Wirtualny_portfel_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" tabindex="-1" role="dialog"
			     aria-labelledby="Wirtualny_portfel_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h2>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of supported wallets','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="blue_payway" class="bluepayment-gateways">
								<div class="bluepayment-gateways__wrap">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currency']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
										<div class="bluepayment-gateways__item">
											<label for="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
												<img class="bluepayment-gateways__img"
												     src="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_logo_url'];?>
"
												     alt="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
												<span class="bluepayment-gateways__name">
                                                    <?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>

                                                </span>
											</label>
										</div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("file:./form/notification-position.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>


<div class="modal fade" id="bm-helper-main-name" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-main-name" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of the payment module in the store','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set a different payment module name when methods are visible or hidden in the store.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</p>
				<div class="row">
					<div class="col-sm-6">
						<p>
								<span class="bm-helper__header">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name for visible payment methods','mod'=>'bluepayment'),$_smarty_tpl ) );?>

								</span>
						</p>
						<img class="bm-helper__image img-responsive" width="330"
						     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-name.png"
						     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
					</div>

					<div class="col-sm-6">
						<p>
								<span class="bm-helper__header">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name for hidden payment methods','mod'=>'bluepayment'),$_smarty_tpl ) );?>

								</span>
						</p>
						<img class="bm-helper__image img-responsive" width="330"
						     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-name2.png"
						     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="bm-helper-visibility" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-visibility" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show payment methods in store','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the option is enabled, the customer will see the available payment methods','mod'=>'bluepayment'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(e.g. BLIK, online transfer, etc.) already on the store page.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This makes it easier and faster for them to choose the most convenient one.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</p>
				<div class="row">
					<div class="col-sm-6">
						<p>
								<span class="bm-helper__header">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visible payment methods','mod'=>'bluepayment'),$_smarty_tpl ) );?>

								</span>
						</p>
						<img class="bm-helper__image img-responsive" width="330"
						     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-payment.png"
						     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
					</div>

					<div class="col-sm-6">
						<p>
								<span class="bm-helper__header">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden payment methods','mod'=>'bluepayment'),$_smarty_tpl ) );?>

								</span>
						</p>
						<img class="bm-helper__image img-responsive" width="330"
						     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-payment2.png"
						     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="bm-helper-gpay" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-gpay" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Pay','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the option is enabled, the customer can use Google Pay directly on the store page.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This makes the payment process faster and easier.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</p>
				<div class="row">
					<div class="col-sm-6">
						<p>
							<span class="bm-helper__header">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Pay on the store page','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
							<span class="bm-helper__subheader">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(recommended)','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
						</p>
						<img class="bm-helper__image img-responsive" width="330"
						     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-gpay.png"
						     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
					</div>
					<div class="col-sm-6"></div>
				</div>

				<div class="row">

					<div class="col-sm-12">
						<p>
							<span class="bm-helper__header">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Pay on a dedicated page outside the store','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
							<span class="bm-helper__subheader">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(recommended if you use a one page checkout module)','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
						</p>

						<div class="bm-modal-flex">
							<img class="bm-helper__image img-responsive" width="330"
							     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-gpay2.png"
							     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Pay','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
							<img class="bm-helper__image img-responsive" width="32" style="margin: 10px;"
							     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-gpay3.png"
							     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Pay','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
							<img class="bm-helper__image img-responsive" width="330"
							     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-gpay4.png"
							     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Pay','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="bm-helper-blik" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-blik" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entering BLIK code','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the option is enabled, the customer can enter the BLIK code already on the store page.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This makes the payment process faster and easier.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				</p>
				<div class="row">
					<div class="col-sm-6">
						<p>
							<span class="bm-helper__header">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'BLIK code on the store\'s website','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
							<span class="bm-helper__subheader">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(recommended)','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
						</p>
						<img class="bm-helper__image img-responsive" width="330"
						     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-blik.png"
						     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entering BLIK code','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
					</div>
					<div class="col-sm-6">
					</div>
				</div>

				<div class="row">

					<div class="col-sm-12">
						<p>
							<span class="bm-helper__header">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'BLIK code on the page outside the store','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
							<span class="bm-helper__subheader">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(recommended if you use a module like "One page checkout")','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</span>
						</p>
						<div class="bm-modal-flex">
							<img class="bm-helper__image img-responsive" width="330"
							     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-blik2.png"
							     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entering BLIK code','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
							<img class="bm-helper__image img-responsive" width="32" style="margin: 10px;"
							     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-blik3.png"
							     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entering BLIK code','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
							<img class="bm-helper__image img-responsive" width="330"
							     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-blik4.png"
							     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entering BLIK code','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>
</div>


<?php }
}
