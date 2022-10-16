<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:27:20
  from 'C:\xampp\htdocs\tpe_1\template\editMitologiaTabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349f058e5b792_54232050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1897a371ff324d503235de2e8f60fbe4f0a328d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\editMitologiaTabla.tpl',
      1 => 1665790039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349f058e5b792_54232050 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://http://localhost/tpe_1/css/style.css">
    <base href="<?php echo BASE_URL;?>
">
    <title>Tabla</title>
</head>
<body>

<form method="post" action="editarMitologia/<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
" >
    <select name="mitologia_edit">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mito');
$_smarty_tpl->tpl_vars['mito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mito']->value) {
$_smarty_tpl->tpl_vars['mito']->do_else = false;
?>    
        <option value="<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['mito']->value->mitologia;?>
</option>               
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </select> 
    <input type="submit">      
</form>

<?php }
}
