<?php
/* Smarty version 3.1.43, created on 2022-12-02 16:06:19
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/notification-position.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a146bc6f306_70356307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080864df58801486d65d70e46842a4d439f265a6' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/notification-position.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a146bc6f306_70356307 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bm-info--small" style="margin-top: 26px">
	<img width="22" class="bm-info--small__icon img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/info.svg" alt="Info" />

	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder the modules so that Blue Media payments display first in your store.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		<a href="#" data-toggle="modal" data-target="#bm-helper-position" style="cursor:pointer">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order of modules?','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		</a>
	</p>

	<div class="modal fade" id="bm-helper-position" tabindex="-1" role="dialog"
	     aria-labelledby="bm-helper-position" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Changing the order of the payment module','mod'=>'bluepayment'),$_smarty_tpl ) );?>

					</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="bm-helper modal-body">
					<p>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder the modules so that Blue Media payments display first in your store.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

					</p>
					<img class="bm-helper__image img-responsive" width="330"
					     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-position.png"
					     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">

					<span class="bm-helper__header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</span>
					<ul class="bm-helper__list">
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to IMPROVEMENTS > Appearance > Items','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the "Display unpositioned hooks" checkbox at the top of the page','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for "paymentOptions"','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Move Blue Media payment module to the top (changes will be saved automatically)','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</li>
					</ul>

					<img class="bm-helper__image img-responsive" width="860"
					     src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bm_assets_images']->value,'html','UTF-8' ));?>
/helpers/helper-position2.png"
					     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to change the order?','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
				</div>
			</div>
		</div>
	</div>

</div><?php }
}
