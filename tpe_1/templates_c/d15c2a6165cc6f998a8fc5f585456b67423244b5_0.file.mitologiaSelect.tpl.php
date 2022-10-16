<?php
/* Smarty version 4.2.1, created on 2022-10-14 16:42:36
  from 'C:\xampp\htdocs\tpe_1\template\mitologiaSelect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349755c135e09_16946694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15c2a6165cc6f998a8fc5f585456b67423244b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\mitologiaSelect.tpl',
      1 => 1665758461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349755c135e09_16946694 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select name="mitologia" >
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mito');
$_smarty_tpl->tpl_vars['mito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mito']->value) {
$_smarty_tpl->tpl_vars['mito']->do_else = false;
?>    
    <option value="<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['mito']->value->mitologia;?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><?php }
}
