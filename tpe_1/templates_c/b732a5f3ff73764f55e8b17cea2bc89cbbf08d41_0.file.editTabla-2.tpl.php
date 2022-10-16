<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:46:35
  from 'C:\xampp\htdocs\tpe_1\template\editTabla-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e6cb081027_61246778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b732a5f3ff73764f55e8b17cea2bc89cbbf08d41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\template\\editTabla-2.tpl',
      1 => 1665787367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e6cb081027_61246778 (Smarty_Internal_Template $_smarty_tpl) {
?>            <select name="mitologia_edit">
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
        <a href="<?php echo BASE_URL;?>
">volver</a>
    </div>
</body>
</html><?php }
}
