<?php

require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";

class ProdController{
    private $ProdModel;
    private $ProdView;



    function __construct(){
        
        $this->ProdModel = new ProdModel();
        $this->ProdView = new ProdView();
    }

       // Productos
    function tablaProducto(){
        $productos = $this->ProdModel->tablaProductoModel();
        $this->ProdView->mostrarTablaCompleta($productos);
    }

    function mostrarTablaProductos($id){
        $productos = $this->ProdModel->valoresTablaProducto($id);
        $this->ProdView->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->ProdModel->productoDetalle($id_p);
        $this->ProdView->verProducto($producto);
    }
    //Productos Administrador

    function agregarProductos(){
        if(isset($_POST["nombre"])&&(isset($_POST["marca"])&&isset($_POST["precio"])&&isset($_POST["stock"])&&isset($_POST["categoria"]))){
            if(!empty($_POST["nombre"])&&(!empty($_POST["marca"])&&!empty($_POST["precio"])&&!empty($_POST["stock"])&&!empty($_POST["categoria"]))){
                $nombre_p = $_POST["nombre"];
                $marca_p = $_POST["marca"];
                $precio_id = $_POST["precio"];
                $stock_id = $_POST["stock"];
                $id_categoria = $_POST["categoria"];
         }else{
             echo "Error";
         }
        }else{
            echo "Error";
        }
        $this->ProdModel->agregarProducto($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
        $this->ProdView->mostrarProductos();
        
    } 

    // Usuario administrador

    
    function editarProd($id){
        $this->ProdModel->editarCategoriasDB($id,$nombre_c,$tipo_c);
        $this->ProdView->mostrarCategorias();

    }

    function borrarProd($id){
        $this->ProdModel->eliminarProducto($id);
        $this->ProdView->mostrarProductos();
    }

}