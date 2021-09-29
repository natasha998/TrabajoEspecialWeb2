
{include file="./encabezado.tpl"}
<h2>Categorias Tabla</h2>

<table>
	{foreach from=$categorias item=$categoria}
		<tr>
			<td><a href="mostrarTablaProductos/{$categoria->id_categoria}">{$categoria->nombre_categoria}</td>
			<td>{$categoria->tipo_categoria}</td>
        </tr>
    {/foreach}
</table>

{include file="./footer.tpl"}

ver fotot celu natu
if(user = administrador){
	if(password = passwordAdmi){
		ejecutame todas la funciones
		agregarCat 
		agregarPro 
		editar
		eliminar
	}
}

