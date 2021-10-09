{{include file="./encabezado.tpl"}}
	<h2>{{$titulo}}</h2>

	<table>
		{{foreach from=$productos item=$producto}}
			<tr>
				<td><a href="productoUnico/{$producto->id_producto}" >{{$producto->nombre_p}}</a></td>
				<td>{{$producto->precio_p}}</td>
				<td>{{$producto->id_producto}}</td>
				<td><a href="editarProd/{$producto->id_producto}">Editar</a></td>
			<td><a href="borrarProd/{$producto->id_producto}">Borrar</a></td>
			</tr>
		{{/foreach}}
	</table>
{{include file="./footer.tpl"}}

