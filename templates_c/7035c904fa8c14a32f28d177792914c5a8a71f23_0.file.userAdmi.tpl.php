<?php
/* Smarty version 3.1.39, created on 2021-10-06 22:47:02
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\userAdmi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e0b463ff603_75362974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7035c904fa8c14a32f28d177792914c5a8a71f23' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\userAdmi.tpl',
      1 => 1633553210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_615e0b463ff603_75362974 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


    <form action="confirmarLogin"   method="POST">
        <label for="user">Usuario</label>
        <input type="text" name="user" required value="admi@admi.com">
        <label for="password">Contraseña</label>
        <input type="password" name="password" required value="nñdscc">

        <input type="submit" value="Cargar Usuario">

        
    </form>


    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p>

    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>



<?php }
}
