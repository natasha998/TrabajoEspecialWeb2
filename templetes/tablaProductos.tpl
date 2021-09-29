{{include file="./encabezado.tpl"}}
	<h2>{{$titulo}}</h2>

	<table>
		{{foreach from=$productos item=$producto}}
			<tr>
				<td><a href="productoUnico/{$producto->id_producto}" >{{$producto->nombre_p}}</a></td>
				<td>{{$producto->precio_p}}</td>
				<td>{{$producto->id_producto}}
			</tr>
		{{/foreach}}
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
{{include file="./footer.tpl"}}