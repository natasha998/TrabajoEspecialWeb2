<?php
/* Smarty version 3.1.39, created on 2021-10-09 16:31:15
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\tablaCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6161a7b3767c32_14183979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d21702c3184c4bcaf90749dcf23fd601b390a46' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\tablaCategorias.tpl',
      1 => 1633789850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6161a7b3767c32_14183979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
			<td><a href="mostrarTablaProductos/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo_categoria;?>
</td>

			<td><a href="borrarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Borrar</a></td>
			<td>			
			<h2>Editar categorias</h2>
			<form action="editarCat" method="POST"> 
				<label for="categoria">editarcategoria</label>
				<input type="text" id="nombre_c" name="nombre_c">
				<label for="tipo_c">Tipo de categoria</label>
				<input type="text" id="tipo_c" name="tipo_c">
				<input type="submit" value="Cargar Categorias">
			</form>
			</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<h2>Nuevas Categorias</h2>

<form action="insertarCategorias" method="POST"> 
	<label for="categoria">Nombre de la categoria</label>
	<input type="text" id="nombre_c" name="nombre_c">
	<label for="tipo_c">Tipo de categoria</label>
	<input type="text" id="tipo_c" name="tipo_c">
	<input type="submit" value="Cargar Categorias">
</form>

<h2>Productos nuevos</h2>


<form action="agregarProductos" method="POST"> 
		<label for="producto">Nombre del producto</label>
		<input type="text" id="nombre_prod" name="nombre">
		<label for="marca">Marca</label>
		<input type="text" id="marca_prod" name="marca">
		<label for="precio">Precio</label>
		<input type="number" id="precio_prod" name="precio">
		<label for="stock">Stock</label>
		<input type="number" id="stock_prod" name="stock">
		<label for="categoria">Categoria:</label>
	    <select name="categoria" id="categoria_prod">
		<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

			<option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" name="categoria"><?php ob_start();
echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</option>
		<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

   		 </select>
		<input type="submit" value="Cargar Productos">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
