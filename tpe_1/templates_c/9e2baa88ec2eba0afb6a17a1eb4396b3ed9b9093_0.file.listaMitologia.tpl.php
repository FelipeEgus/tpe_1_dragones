<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:09:08
  from 'C:\xampp\htdocs\tpe_1\template\listaMitologia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c72f4849b85_27254307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2baa88ec2eba0afb6a17a1eb4396b3ed9b9093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\listaMitologia.tpl',
      1 => 1665954500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c72f4849b85_27254307 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <header>
        <h1>dragones</h1>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <li><a aria-current="page" href="login">Login</a></li>
        <?php } else { ?> 
            <li><a aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_MAIL'];?>
)</a></li>
        <?php }?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mito');
$_smarty_tpl->tpl_vars['mito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mito']->value) {
$_smarty_tpl->tpl_vars['mito']->do_else = false;
?>
            <li><a href="mitologia/<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
">ver <?php echo $_smarty_tpl->tpl_vars['mito']->value->mitologia;?>
</a></li>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        </ul>
    </header><?php }
}
