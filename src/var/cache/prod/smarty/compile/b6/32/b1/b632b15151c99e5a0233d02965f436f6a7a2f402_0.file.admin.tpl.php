<?php
/* Smarty version 3.1.43, created on 2022-12-02 14:46:26
  from '/var/www/html/modules/paypal/views/templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a01b24edfd4_06799765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b632b15151c99e5a0233d02965f436f6a7a2f402' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/admin.tpl',
      1 => 1669983383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a01b24edfd4_06799765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['isModeSandbox']->value)) && $_smarty_tpl->tpl_vars['isModeSandbox']->value) {?>
  <style>
    .page-head {
      background-color: #585757 !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn i {
      color: #fff !important;
    }

    .bootstrap .page-head ul.breadcrumb {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li:before {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li a {
      color: #fff !important;
    }

    .page-head .wrapper h1 {
      color: #fff !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn {
      color: #fff !important;
    }

    <?php if (version_compare($_smarty_tpl->tpl_vars['psVersion']->value,'1.7.4','<')) {?>

    .page-head .page-title {
      color: #fff !important;
    }

    .page-head .page-head-tabs a{
      color: #fff !important;
    }

    .page-head .page-head-tabs a.current{
      border-bottom: 3px solid #fff !important;
    }

    <?php }?>


  </style>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753316072638a01b24ecef8_39298882', 'content');
?>


<?php }
/* {block 'content'} */
class Block_753316072638a01b24ecef8_39298882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_753316072638a01b24ecef8_39298882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }
}
}
/* {/block 'content'} */
}
