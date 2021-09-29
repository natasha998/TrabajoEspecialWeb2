<?php
/* Smarty version 3.1.39, created on 2021-09-29 23:25:16
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\tablaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154d9bc98b2c8_88230853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7da42bd4f74e21777b59bd6be55bcf42b549cef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\tablaProductos.tpl',
      1 => 1632950627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6154d9bc98b2c8_88230853 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

	<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h2>

	<table>
		<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

			<tr>
				<td><a href="productoUnico/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->nombre_p;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</a></td>
				<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->precio_p;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
				<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

			</tr>
		<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

	</table>

	<form action="agregarProductos" method="POST"> 
		<label for="producto">Nombre del producto</label>
		<input type="text" id="nombre_prod" name="nombre">
		<label for="marca">Marca</label>
		<input type="text" id="marca_prod" name="marca">
		<label for="precio">Precio</label>
		<input type="number" id="precio_prod" name="precio">
		<label for="stock">Stock</label>
		<input type="number" id="stock_prod" name="stock">
		<label for="categoria">Categoria</label>
		<input type="text" id="categoria_prod" name="categoria"> 
		<input type="submit" value="Cargar Datos">
	</form>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;
}
}
