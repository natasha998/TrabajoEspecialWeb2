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

    function mostrarTablaProductos(){
        $productos = $this->model->valoresTablaProducto();
        $this->view->mostrarTablaProductos($productos);
    }
}