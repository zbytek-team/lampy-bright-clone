<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:46:26
  from '/var/www/html/modules/paypal/views/templates/admin/setup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01b24e8c83_18427323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a7f625c3b2b943e63be9532d4fc6a697ad2932' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/setup.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages/prestashopCheckoutInfo.tpl' => 1,
    'file:./_partials/messages/restApiIntegrationMessage.tpl' => 1,
    'file:./_partials/messages/roundingSettingsMessage.tpl' => 1,
    'file:./_partials/paypalBanner/installmentPopup.tpl' => 1,
    'file:./_partials/headerLogo.tpl' => 1,
  ),
),false)) {
function content_638a01b24e8c83_18427323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043954310638a01b24dec12_75116826', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './admin.tpl');
}
/* {block 'content'} */
class Block_1043954310638a01b24dec12_75116826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1043954310638a01b24dec12_75116826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['showPsCheckoutInfo']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/prestashopCheckoutInfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['showRestApiIntegrationMessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/restApiIntegrationMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['need_rounding']->value)) && $_smarty_tpl->tpl_vars['need_rounding']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/roundingSettingsMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['showInstallmentPopup']->value)) && $_smarty_tpl->tpl_vars['showInstallmentPopup']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/paypalBanner/installmentPopup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/headerLogo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="pp__flex setup-blocks">
      <?php if ((isset($_smarty_tpl->tpl_vars['formAccountSettings']->value))) {?>
        <div class="pp__flex-item-1 pp__mr-1 stretchHeightForm">
            <?php if ((isset($_smarty_tpl->tpl_vars['country_iso']->value)) && in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('MX','BR','IN','JP'))) {?>
              <div>
                  <?php echo $_smarty_tpl->tpl_vars['formAccountSettings']->value;?>
              </div>

              <div>
                  <?php if ((isset($_smarty_tpl->tpl_vars['formPaymentSettings']->value))) {?>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['formPaymentSettings']->value;?>
                    </div>
                  <?php }?>
              </div>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['formAccountSettings']->value;?>
            <?php }?>

        </div>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['formEnvironmentSettings']->value))) {?>
        <div class="pp__flex-item-1 pp__mr-1 stretchHeightForm">
            <?php echo $_smarty_tpl->tpl_vars['formEnvironmentSettings']->value;?>
        </div>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['country_iso']->value)) === false || false === in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('MX','BR','IN','JP'))) {?>
          <?php if ((isset($_smarty_tpl->tpl_vars['formPaymentSettings']->value))) {?>
            <div class="pp__flex-item-1 pp__mr-1 stretchHeightForm">
                <?php echo $_smarty_tpl->tpl_vars['formPaymentSettings']->value;?>
            </div>
          <?php }?>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['formStatus']->value))) {?>
        <div class="pp__flex-item-1 <?php if (false === (isset($_smarty_tpl->tpl_vars['country_iso']->value)) || false === in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('MX','BR','IN','JP'))) {?>stretchHeightForm<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['formStatus']->value;?>
        </div>
      <?php }?>
  </div>
<?php
}
}
/* {/block 'content'} */
}
