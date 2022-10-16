<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:55:14
  from 'C:\xampp\htdocs\tpe_1\template\editTabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bea2515d01_99762611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb77b4b5ebc8589908b24e996c881a5f4220db7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\editTabla.tpl',
      1 => 1665776846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349bea2515d01_99762611 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dragones']->value, 'dragon');
$_smarty_tpl->tpl_vars['dragon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dragon']->value) {
$_smarty_tpl->tpl_vars['dragon']->do_else = false;
?>
        <form method="POST" action="editarDragon/<?php echo $_smarty_tpl->tpl_vars['dragon']->value->id;?>
" >
            <input type="text" name="raza_edit" placeholder="tipo de dragon" value='<?php echo $_smarty_tpl->tpl_vars['dragon']->value->nombre_raza;?>
' required>
                <select name="mitologia_edit" >
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
            <input type="text" name="descrip_edit" placeholder="descripcion" value='<?php echo $_smarty_tpl->tpl_vars['dragon']->value->descrip;?>
' required>
            <input type="text" name="repre_edit" placeholder="reprecentaciones" value='<?php echo $_smarty_tpl->tpl_vars['dragon']->value->representaciones;?>
' required>
            <input type="submit">      
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
