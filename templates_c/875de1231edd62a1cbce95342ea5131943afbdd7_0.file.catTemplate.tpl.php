<?php
/* Smarty version 3.1.39, created on 2021-09-27 20:54:14
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\catTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6152135643dd88_31799144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '875de1231edd62a1cbce95342ea5131943afbdd7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\catTemplate.tpl',
      1 => 1632768851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
  ),
),false)) {
function content_6152135643dd88_31799144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Categorias Tabla</h2>

<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo_categoria;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
