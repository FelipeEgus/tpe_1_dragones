<?php
/* Smarty version 4.2.1, created on 2022-10-12 18:52:59
  from 'C:\xampp\htdocs\tpe_1\template\editDragon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346f0eb1eef77_30589171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b438c2a34fe94e14b530110a1848bbcb47882e8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\editDragon.tpl',
      1 => 1665593577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6346f0eb1eef77_30589171 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
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
            <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->nombre_raza;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->origen_mitologico;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->descrip;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
</td>
        </tr>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<form method="post" action="comepito" >
        <input type="text" name="raza" placeholder="tipo de dragon" required>
            <select name="mitologia" >
                <option value="1">babilonia</option>
                <option value="2">europeo</option>
                <option value="3">grecoromano</option>
                <option value="4">prehistorico</option>
                <option value="5">egipcio</option>
                <option value="6">asiatico</option>
                <option value="7">hindú</option>
                <option value="8">latino americano</option>
                <option value="9">nordica</option>
            </select>
        <input type="text" name="descripcion" placeholder="descripcion" required>
        <input type="text" name="repre" placeholder="reprecentaciones" required>
        <input type="submit" >      
    </form><?php }
}
