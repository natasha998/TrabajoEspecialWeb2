<?php
 
 class ProdModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
     }

     function valoresTablaProducto($id){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria=$id");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
     }

     function productoDetalle($id_categoria){
         $sentencia = $this->db->prepare( "SELECT * FROM producto WHERE id_categoria=?");
         $sentencia->execute(array($id_categoria));
         $productoUnico = $sentencia->fetch(PDO::FETCH_OBJ);
         return $productoUnico;
     }



 }
