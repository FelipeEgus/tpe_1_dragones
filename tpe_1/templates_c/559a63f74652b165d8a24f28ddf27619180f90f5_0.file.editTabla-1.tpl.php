<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:09:16
  from 'C:\xampp\htdocs\tpe_1\template\editTabla-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c72fc2af2a0_08089092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '559a63f74652b165d8a24f28ddf27619180f90f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\editTabla-1.tpl',
      1 => 1665954508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c72fc2af2a0_08089092 (Smarty_Internal_Template $_smarty_tpl) {
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
    </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dragones']->value, 'dragon');
$_smarty_tpl->tpl_vars['dragon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dragon']->value) {
$_smarty_tpl->tpl_vars['dragon']->do_else = false;
?>
        <form method="POST" action="editarDragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
">
                <input type="text" name="raza_edit" placeholder="tipo de dragon" value='<?php echo $_smarty_tpl->tpl_vars['dragon']->value->nombre_raza;?>
' required>
                <input type="text" name="descrip_edit" placeholder="descripcion" value='<?php echo $_smarty_tpl->tpl_vars['dragon']->value->descrip;?>
' required>
                <input type="text" name="repre_edit" placeholder="reprecentaciones" value='<?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
' required>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
