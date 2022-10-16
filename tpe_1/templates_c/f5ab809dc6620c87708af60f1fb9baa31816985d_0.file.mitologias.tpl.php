<?php
/* Smarty version 4.2.1, created on 2022-10-14 16:39:17
  from 'C:\xampp\htdocs\tpe_1\template\mitologias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349749563bc49_08918081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ab809dc6620c87708af60f1fb9baa31816985d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\mitologias.tpl',
      1 => 1665758355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349749563bc49_08918081 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table>
        <th>mitologias</th>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mito');
$_smarty_tpl->tpl_vars['mito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mito']->value) {
$_smarty_tpl->tpl_vars['mito']->do_else = false;
?>
            <tr>  
                <td><?php echo $_smarty_tpl->tpl_vars['mito']->value->mitologia;?>
</td>
                <td><a href='editarDatosMitologia/<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
'>editar</a></td>
                <td><a href='deleteMitologia/<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
'>borrar</a></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <form method="post" action="addMitologia" >
        <input type="text" name="mitologia" placeholder="nueva mitologia" required>
        <input type="submit">      
    </form>
    <a href="<?php echo BASE_URL;?>
">volver</a>
</div><?php }
}
