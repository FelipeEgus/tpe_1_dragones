<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:12:19
  from 'C:\xampp\htdocs\tpe_1\template\verDragon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c73b32b1879_42209464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a03d482b11a9160457c392fdab08ee94eaafdbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\verDragon.tpl',
      1 => 1665954734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c73b32b1879_42209464 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>dragon</th>
                    <th>mitologia</th>
                    <th>descrip</th>
                    <th>representaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dragones']->value, 'dragon');
$_smarty_tpl->tpl_vars['dragon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dragon']->value) {
$_smarty_tpl->tpl_vars['dragon']->do_else = false;
?>
                <tr>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->nombre_raza;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->origen_mitologico;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->descrip;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
</td>
                    <?php } else { ?> 
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->nombre_raza;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->origen_mitologico;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->descrip;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
</td>
                        <td><div class="btnEditar"><a href='editarDatosDragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
'>editar</a></div></td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo BASE_URL;?>
">volver</a>
</body>
</html><?php }
}
