<?php

require_once './libs/Smarty.class.php';


class ProdView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarTablaProductos($productos){
        
        $this->smarty->assign('titulo', "lista de productos");
        $this->smarty->assign('productos',$productos);

        $this->smarty->display('templetes/tablaProductos.tpl');

    }

    function verProducto($producto){
        $this->smarty->assign('titulo', "Producto Unico");
        $this->smarty->assign('producto',$producto);

        $this->smarty->display('templetes/productoUnico.tpl');
    }

    
}
