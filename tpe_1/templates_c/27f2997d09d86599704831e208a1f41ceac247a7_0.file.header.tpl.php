<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:09:24
  from 'C:\xampp\htdocs\tpe_1\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349a5d43d03f4_93326495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f2997d09d86599704831e208a1f41ceac247a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\header.tpl',
      1 => 1665770505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349a5d43d03f4_93326495 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://http://localhost/tpe_1/css/style.css">
    <title>Tabla</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <header>
        <ul>
            <li><div class="btnVer"><a href="mitologia/1">ver babilonicos</a></div></li>
            <li><div class="btnVer"><a href="mitologia/2">ver europeos</a></div></li>
            <li><div class="btnVer"><a href="mitologia/3">ver grecoromanos</a></div></li>
            <li><div class="btnVer"><a href="mitologia/4">ver prehistoricos</a></div></li>
            <li><div class="btnVer"><a href="mitologia/5">ver egipcios</a></div></li>
            <li><div class="btnVer"><a href="mitologia/6">ver asiaticos</a></div></li>
            <li><div class="btnVer"><a href="mitologia/7">ver hindús</a></div></li>
            <li><div class="btnVer"><a href="mitologia/8">ver latino americanos</a></div></li>
            <li><div class="btnVer"><a href="mitologia/9">ver nordicos</a></div></li>
        </ul>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <li>
                <a aria-current="page" href="login">Login</a>
            </li>
        <?php } else { ?> 
            <li class="nav-item ml-auto">
                <a aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_MAIL'];?>
)</a>
            </li>
        <?php }?>
    </header><?php }
}
