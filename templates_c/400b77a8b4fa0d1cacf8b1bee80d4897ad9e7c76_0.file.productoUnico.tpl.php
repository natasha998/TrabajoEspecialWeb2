<?php
/* Smarty version 3.1.39, created on 2021-09-28 21:45:53
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\productoUnico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615370f13527c1_70357215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '400b77a8b4fa0d1cacf8b1bee80d4897ad9e7c76' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\productoUnico.tpl',
      1 => 1632858330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_615370f13527c1_70357215 (Smarty_Internal_Template $_smarty_tpl) {
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
		<tr>
			<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->nombre_p;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
			<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->precio_p;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
        </tr>
</table>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;
}
}
