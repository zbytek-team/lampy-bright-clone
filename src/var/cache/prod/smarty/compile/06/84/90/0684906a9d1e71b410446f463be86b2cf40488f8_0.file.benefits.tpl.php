<?php
/* Smarty version 3.1.43, created on 2022-12-01 20:52:00
  from '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/benefits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638905e003f219_44793911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0684906a9d1e71b410446f463be86b2cf40488f8' => 
    array (
      0 => '/var/www/html/modules/bluepayment/views/templates/admin/_configure/helpers/form/benefits.tpl',
      1 => 1669924308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638905e003f219_44793911 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">

	<style>
		.bm-info__item::before {
            background-image: url('/modules/bluepayment/views/img/check.png');
		}
	</style>

	<div class="bm-info">

		<img class="bm-info__img" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/blue-media.svg" alt="Blue Media">
		<ul class="bm-info__list">
			<li class="bm-info__item">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Commission only 1.19%','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</li>
			<li class="bm-info__item">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prepare shop regulations 10% cheaper.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				<a target="_blank" href="https://developers.bluemedia.pl/legal-geek?mtm_campaign=presta_shop_legalgeek&mtm_source=presta_shop_backoffice&mtm_medium=cta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find out more','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</a>
			</li>
		</ul>

	</div>


</div>
<?php }
}
