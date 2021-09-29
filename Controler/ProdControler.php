<?php


require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";

class ProdControler{
    private $model;
    private $view;

    function __construct(){
        $this->model = new ProdModel();
        $this->view = new ProdView();
    }

    function mostrarTablaProductos($id){
        $productos = $this->model->valoresTablaProducto($id);
        $this->view->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->model->productoDetalle($id_p);
        $this->view->verProducto($producto);
    }
}