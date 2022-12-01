<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:52:00
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/analitics-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638905e01256a3_50028029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f781cc93744b122f5816196e383b63e40411ff8a' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/analitics-info.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638905e01256a3_50028029 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section-heading">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more about payments','mod'=>'bluepayment'),$_smarty_tpl ) );?>

</div>

<ul class="bm-list-icon">
	<li class="bm-list-icon__item">
		<img class="bm-list-icon__icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/analitics-connect.svg" alt="">
		<span class="bm-list-icon__content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combine Google Analytics with the Blue Media payment plugin and get more data about your customers at the payment stage.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</span>
	</li>
	<li class="bm-list-icon__item">
		<img class="bm-list-icon__icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/analytical-benefits.svg" alt="">
		<span class="bm-list-icon__content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to the connection, you can find out, for example, what the conversion rate of individual payment methods is or what the sales funnel looks like at the payment stage.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
<br /></span>
	</li>
</ul>

<div class="section-heading">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Analytics Configuration','mod'=>'bluepayment'),$_smarty_tpl ) );?>

</div>


<div class="modal fade" id="bm-helper-analitics-ga-id" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-analitics-ga-id" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Where can I find my Google Account ID?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<div class="row">
					<div class="col-sm-12">
						<span class="bm-helper__header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Universal Analytics','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</span>
						<ul class="bm-helper__list">
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to "Administrator" in the lower left corner.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In the "Property" section, click "Tracking information".','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click "Tracking Code."','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your tracking ID is located in the upper right corner (e.g. UA-000000-2).','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="bm-helper-analitics-ga4-id" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-analitics-ga4-id" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Where can I find the measurement ID?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<div class="row">
					<div class="col-sm-12">
						<span class="bm-helper__header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Analytics 4','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</span>
						<ul class="bm-helper__list">
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to "Administration" in the lower left corner.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In the "Services" section, click "Data Streams."','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click the name of the data stream.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your measurement ID is located in the upper right corner (e.g., G-QCX4K9GSPC).','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="bm-helper-analitics-ga4-key" tabindex="-1" role="dialog"
     aria-labelledby="bm-helper-analitics-ga4-key" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How do I create an API secret?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="bm-helper modal-body">
				<div class="row">
					<div class="col-sm-6">
						<span class="bm-helper__header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Analytics 4','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</span>
						<ul class="bm-helper__list">
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to "Administration" in the lower left corner.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In the "Services" section, click "Data Streams."','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click the name of the data stream.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Then click "Create" in the "Measurement Protocol" section','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
