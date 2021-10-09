
{include file="./encabezado.tpl"}
<h2>Categorias Tabla</h2>

<table>
	{foreach from=$categorias item=$categoria}
		<tr>
			<td><a href="mostrarTablaProductos/{$categoria->id_categoria}">{$categoria->nombre_categoria}</td>
			<td>{$categoria->tipo_categoria}</td>

			<td><a href="borrarCat/{$categoria->id_categoria}">Borrar</a></td>
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
    {/foreach}
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
		{{foreach from=$categorias item=$categoria}}
			<option value="{{$categoria->id_categoria}}" name="categoria">{{$categoria->nombre_categoria}}</option>
		{{/foreach}}
   		 </select>
		<input type="submit" value="Cargar Productos">
</form>

{include file="./footer.tpl"}


