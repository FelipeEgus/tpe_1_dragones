<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:07:44
  from 'C:\xampp\htdocs\tpe_1\template\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349ebc016a171_57652857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c011f2262fbe605cc0684f8d2d6b8d8fb3cb1e29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\tabla.tpl',
      1 => 1665788753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349ebc016a171_57652857 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table>
        <thead>
            <tr>
                <th>dragon</th>
                <th>mitologia</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
</td>
                    <td><div class="btnVer"><a href="dragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
">ver</a></div></td>
                <?php } else { ?> 
                    <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->nombre_raza;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->origen_mitologico;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
</td>
                    <td><div class="btnVer"><a href="dragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
">ver</a></div></td>
                    <td><div class="btnEditar"><a href='editarDatosDragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
'>editar</a></div></td>
                    <td><div class="btnEliminar"><a href='deleteDragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
'>borrar</a></div></td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php }
}
