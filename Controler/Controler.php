<?php

require_once "./Model/CatModel.php";
require_once "./View/CatView.php";

require_once "./View/HomeView.php";


require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";


class Controler{
    private $modelCat;
    private $viewCat;

    private $viewHome;

    private $modelProd;
    private $viewProd;



    function __construct(){
        $this->modelCat= new  CatModel();
        $this->viewCat = new  CatView();

        $this->viewHome = new HomeView();

        $this->modelProd = new ProdModel();
        $this->viewProd = new ProdView();


        }


        //Categorias
    function mostrarTablaCategoria(){
        $categorias = $this->modelCat->valoresTablaCategoria();
        $this->viewCat->mostrarTablaCategorias($categorias);
    }

    function insertarCategorias($nombre_c,$detalle_c,$tipo_c){
        $this->modelCat->insertarTablaCategorias($_POST['nombre_c'], $_POST['detalle_c'],$_POST['tipo_c']);
        $this->view->mostarHome();
    }
    

    //Home
    function mostrarHome(){
        $this->viewHome->mostrarHome();
    }

    function mostarContacto(){
        return "about contacto";
    }


    // Productos
    function mostrarTablaProductos($id){
        $productos = $this->modelProd->valoresTablaProducto($id);
        $this->viewProd->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->modelProd->productoDetalle($id_p);
        $this->viewProd->verProducto($producto);
    }


    //user and secction


    function loggin(){

    }

    function inicioDeSecion(){
        
    }
}