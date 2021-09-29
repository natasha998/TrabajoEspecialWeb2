<?php
/* Smarty version 3.1.39, created on 2021-09-29 15:08:57
  from 'D:\xampp\htdocs\Trabajo\TrabajoEspecialWeb2\templetes\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61546569b79d45_72029270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b1a68c30559f33ae185bc08b6810d21c73af828' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Trabajo\\TrabajoEspecialWeb2\\templetes\\home.tpl',
      1 => 1632920934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_61546569b79d45_72029270 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['home']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h2>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;
}
}
