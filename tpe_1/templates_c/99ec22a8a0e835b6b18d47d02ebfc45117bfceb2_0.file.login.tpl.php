<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:44:59
  from 'C:\xampp\htdocs\tpe_1\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486abb3d3440_08640214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ec22a8a0e835b6b18d47d02ebfc45117bfceb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\login.tpl',
      1 => 1665690297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63486abb3d3440_08640214 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
<h1>LogIn</h1>
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="mail">mail</label>
            <input type="mail" required name="mail" aria-describedby="mailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit">Entrar</button>
    </form>
    
    <h1>Register</h1>
    <form method="POST" action="registrar">
        <div class="form-group">
            <label for="mail">mail</label>
            <input type="mail" required name="mail" aria-describedby="mailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>
        <button type="submit">Registrar</button>
    </form>


    <a href="<?php echo BASE_URL;?>
">volver</a>
</div>


<?php }
}
