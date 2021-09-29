<?php

require_once "./Model/CatModel.php";
require_once "./View/CatView.php";

class CatControler{
    private $model;
    private $view;

    function __construct(){
        $this->model = new  CatModel();
        $this->view = new  CatView();
        }

    function mostrarTablaCategoria(){
        $categorias = $this->model->valoresTablaCategoria();
        $this->view->mostrarTablaCategorias($categorias);
    }

    function insertarCategorias($nombre_c,$detalle_c,$tipo_c){
        $this->model->insertarTablaCategorias($_POST['nombre_c'], $_POST['detalle_c'],$_POST['tipo_c']);
        $this->view->mostarHome();
    }
    
}