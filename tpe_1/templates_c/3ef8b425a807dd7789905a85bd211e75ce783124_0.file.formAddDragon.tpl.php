<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:55:26
  from 'C:\xampp\htdocs\tpe_1\template\formAddDragon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e8def1ee21_71031265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef8b425a807dd7789905a85bd211e75ce783124' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\formAddDragon.tpl',
      1 => 1665788116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e8def1ee21_71031265 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
        <div class="formAdd">
            <form method="post" action="addDragon" >
                <input type="text" name="raza" placeholder="tipo de dragon" required>
                    <select name="mitologia" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mito');
$_smarty_tpl->tpl_vars['mito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mito']->value) {
$_smarty_tpl->tpl_vars['mito']->do_else = false;
?>    
                        <option value="<?php echo $_smarty_tpl->tpl_vars['mito']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['mito']->value->mitologia;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <textarea name="descripcion" cols="50" rows="4" placeholder="descripcion" required></textarea>
                <input type="text" name="repre" placeholder="reprecentaciones" required>
                <input type="submit">      
            </form>
        </div>
        <a href="tablaMitologia">mitologias</a> 
    <?php }?>
</body>
</html> <?php }
}
