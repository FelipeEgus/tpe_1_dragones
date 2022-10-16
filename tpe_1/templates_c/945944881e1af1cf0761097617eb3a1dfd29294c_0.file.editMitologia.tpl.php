<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:12:34
  from 'C:\xampp\htdocs\tpe_1\template\editMitologia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c73c201e1b2_93507164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945944881e1af1cf0761097617eb3a1dfd29294c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\editMitologia.tpl',
      1 => 1665954537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c73c201e1b2_93507164 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL;?>
">
    <title>Tabla</title>
</head>
<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mito');
$_smarty_tpl->tpl_vars['mito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mito']->value) {
$_smarty_tpl->tpl_vars['mito']->do_else = false;
?> 
<form method="post" action="editarMitologia/<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
" >
    <input type="text" name="mitologias_edit" placeholder="mitologia" value="<?php echo $_smarty_tpl->tpl_vars['mito']->value->mitologia;?>
" required>
    <input type="submit">      
</form>
<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
