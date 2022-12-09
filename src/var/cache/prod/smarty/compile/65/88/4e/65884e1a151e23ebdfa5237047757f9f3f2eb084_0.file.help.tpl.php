<?php
/* Smarty version 3.1.43, created on 2022-12-02 16:06:19
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a146bca0111_81181811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65884e1a151e23ebdfa5237047757f9f3f2eb084' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/help.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a146bca0111_81181811 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="bm-list-icon" style="margin-top: 20px;">
	<li class="bm-list-icon__item">
		<img class="bm-list-icon__icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/icons/idea.svg"
		     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read the materials','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
		<div class="bm-list-icon__content">
			<h4 class="bm-list-icon__heading">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read the materials','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</h4>
            <ul class="bm-list">
                <li>
	                <a target="_blank" href="https://developers.bluemedia.pl/online/wdrozenie-krok-po-kroku#wdrozenie-bramki-platnosci">
		                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Implementing online payments','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	                </a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'step by step','mod'=>'bluepayment'),$_smarty_tpl ) );?>

                </li>
                <li>
	                <a target="_blank" href="https://developers.bluemedia.pl/online/wtyczki/prestashop-1-7#konfiguracja">
		                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module configuration','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	                </a>
                </li>
                <li>
	                <a target="_blank" href="https://developers.bluemedia.pl/online/wtyczki/prestashop-1-7#aktualizacja">
		                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update the module','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	                </a>
                </li>
            </ul>
		</div>
	</li>
	<li class="bm-list-icon__item">
		<img class="bm-list-icon__icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/icons/mail.svg"
		     alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'bluepayment'),$_smarty_tpl ) );?>
">
		<div class="bm-list-icon__content">
			<h4 class="bm-list-icon__heading">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</h4>
			<a target="_blank" href="https://developers.bluemedia.pl/kontakt/plugins/presta">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write to us','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</a>
		</div>
	</li>
</ul>
<?php }
}
