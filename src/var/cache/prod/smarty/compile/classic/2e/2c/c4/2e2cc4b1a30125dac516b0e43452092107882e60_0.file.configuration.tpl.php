<?php
/* Smarty version 3.1.43, created on 2022-11-28 16:29:11
  from '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6384d3c7977707_85655827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2cc4b1a30125dac516b0e43452092107882e60' => 
    array (
      0 => '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl',
      1 => 1669644305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384d3c7977707_85655827 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
