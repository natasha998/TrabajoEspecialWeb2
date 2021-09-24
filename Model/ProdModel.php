<?php
 
 class ProdModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
     }

     function valoresTablaProducto(){
        $sentencia = $this->db->prepare("select * from productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
     }
 }
