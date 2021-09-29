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
    function tablaProducto(){
        $productos = $this->modelProd->tablaProductoModel();
        $this->viewProd->mostrarTablaCompleta($productos);
    }

    function mostrarTablaProductos($id){
        $productos = $this->modelProd->valoresTablaProducto($id);
        $this->viewProd->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->modelProd->productoDetalle($id_p);
        $this->viewProd->verProducto($producto);
    }
    //Productos Administrador

    function agregarProductos(){
        var_dump("Hy");
        if(isset($_POST["nombre"])&&(isset($_POST["marca"])&&isset($_POST["precio"])&&isset($_POST["stock"])&&isset($_POST["categoria"]))){
            if(!empty($_POST["nombre"])&&(!empty($_POST["marca"])&&!empty($_POST["precio"])&&!empty($_POST["stock"])&&!empty($_POST["categoria"]))){
                $nombre_p = $_POST["nombre"];
                $marca_p = $_POST["marca"];
                $precio_id = $_POST["precio"];
                $stock_id = $_POST["stock"];
                $id_categoria = $_POST["categoria"];
         }else{
             echo "erruor";
         }
        }else{
            echo "error";
        }
        $this->modelProd->agregarProducto($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
        $this->viewProd->mostrarProductos();
        
    } 

    //Usuario y seccion


    function login(){
        
    }

    function inicioDeSeccion(){
        
    }
}