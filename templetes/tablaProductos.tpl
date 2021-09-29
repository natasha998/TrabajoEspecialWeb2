{{include file="./encabezado.tpl"}}
<h2>{{$titulo}}</h2>

<table>
	{{foreach from=$productos item=$producto}}
		<tr>
			<td><a href="productoUnico/{$producto->id_categoria}" >{{$producto->nombre_p}}</a></td>
			<td>{{$producto->precio_p}}</td>
			<td>{{$producto->id_categoria}}
        </tr>
    {{/foreach}}
</table>

{{include file="./footer.tpl"}}