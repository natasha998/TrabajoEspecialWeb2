<?php
/* Smarty version 3.1.39, created on 2021-10-06 00:00:18
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\encabezado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ccaf2cb1137_84845133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24897e4e8e2185195a5f8fc8bdd2bcc81f0e4298' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\encabezado.tpl',
      1 => 1633471198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ccaf2cb1137_84845133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/myStyle.css" media="screen" />
    <title>Document</title>
</head>
<body>
    <div class="content">
        <header>
            <img src="media/1.png" alt="">
            <nav> 
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="categorias">Categorias</a>
                        <ul class="sub-lista">
                            <li><a href="productos">Ver todos los productos</a></li>
                            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                <li><a href="mostrarTablaProductos/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</li>
                            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                            
                            </li>
                    </ul>
                    
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
        </header>

<?php }
}
