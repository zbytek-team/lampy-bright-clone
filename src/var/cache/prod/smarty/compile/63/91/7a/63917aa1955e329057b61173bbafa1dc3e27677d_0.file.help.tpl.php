<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:47:01
  from '/var/www/html/modules/paypal/views/templates/admin/help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01d5d18bc6_79520522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63917aa1955e329057b61173bbafa1dc3e27677d' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/help.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages/restApiIntegrationMessage.tpl' => 1,
    'file:./_partials/messages/roundingSettingsMessage.tpl' => 1,
    'file:./_partials/headerLogo.tpl' => 1,
    'file:./_partials/block_info.tpl' => 1,
    'file:./_partials/messages/logoMessage.tpl' => 1,
  ),
),false)) {
function content_638a01d5d18bc6_79520522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1004710116638a01d5d0e169_23005794', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './admin.tpl');
}
/* {block 'content'} */
class Block_1004710116638a01d5d0e169_23005794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1004710116638a01d5d0e169_23005794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['showRestApiIntegrationMessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/restApiIntegrationMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['need_rounding']->value)) && $_smarty_tpl->tpl_vars['need_rounding']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/roundingSettingsMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variant'=>'hidden'), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/headerLogo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="panel">
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have just created your PayPal account, check the email sent by PayPal to confirm your email address.','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must have a PayPal Business Account. Otherwise, your personal account should be converted to Business account.','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>
  </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['need_rounding']->value)) && $_smarty_tpl->tpl_vars['need_rounding']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./_partials/block_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variant'=>"help"), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/logoMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="panel help">
    <ul class="tick">
      <li>
        <p class="h4">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover module documentation before configuration','mod'=>'paypal'),$_smarty_tpl ) );?>

        </p>
        <p>
          <a target="_blank"
             href="https://help.202-ecommerce.com/wp-content/uploads/2019/12/User-guide-PayPal-PrestaShop-module-51.pdf"
             class="btn btn-default">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access user documentation for module configuration.','mod'=>'paypal'),$_smarty_tpl ) );?>

          </a>
        </p>
      </li>


      <li>
        <p class="h4">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check requirements before installation','mod'=>'paypal'),$_smarty_tpl ) );?>

        </p>
        <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you using the required TLS version? Did you select a default country? Click on the button below and check if all requirements are completed!','mod'=>'paypal'),$_smarty_tpl ) );?>

        </p>
        <p>
          <button  name="submit-ckeck_requirements"  class="btn btn-default" id="ckeck_requirements">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check requirements','mod'=>'paypal'),$_smarty_tpl ) );?>

          </button>

        <p class="action_response"></p>
        </p>
      </li>

      <li>
        <p class="h4">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check your transactions history log and potential errors','mod'=>'paypal'),$_smarty_tpl ) );?>

        </p>
        <a href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPayPalLogs',true));?>
" class="btn btn-default">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transaction log','mod'=>'paypal'),$_smarty_tpl ) );?>

        </a>
      </li>

      <li>
        <p class="h4">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you still have any questions?','mod'=>'paypal'),$_smarty_tpl ) );?>

        </p>
        <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us! We will be happy to help!','mod'=>'paypal'),$_smarty_tpl ) );?>

        </p>
        <p>
          <a target="_blank"
             href="https://www.paypal.com/fr/webapps/mpp/contact-us"
             class="btn btn-default">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact our product team for any functional questions','mod'=>'paypal'),$_smarty_tpl ) );?>

          </a>
        </p>
        <p>
          <a target="_blank" href="https://addons.prestashop.com/fr/contactez-nous?id_product=1748" class="btn btn-default">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact our technical support','mod'=>'paypal'),$_smarty_tpl ) );?>

          </a>
        </p>
      </li>

        <?php if ($_smarty_tpl->tpl_vars['showPsCheckout']->value) {?>
          <li>
            <p class="h4">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to accept more types of payments?','mod'=>'paypal'),$_smarty_tpl ) );?>

            </p>

            <p>
            <div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module allows your customers to pay with their PayPal account.','mod'=>'paypal'),$_smarty_tpl ) );?>

            </div>

            <div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you wish to accept credit cards and other payment methods in addition to PayPal, we recommend the PrestaShop Checkout module.','mod'=>'paypal'),$_smarty_tpl ) );?>

            </div>
            </p>

            <p>
          <span class="btn btn-default install-ps-checkout" data-action="install">
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psCheckoutBtnText']->value,'htmlall','UTF-8' ));?>

          </span>
            </p>

            <p>
              <image src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
paypal/views/img/Logos.png"></image>
            </p>
          </li>
        <?php }?>
    </ul>
  </div>
<?php
}
}
/* {/block 'content'} */
}
