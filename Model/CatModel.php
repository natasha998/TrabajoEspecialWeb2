<?php

class CatModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
     }

     function valoresTablaCategoria(){

        $sentencia = $this->db->prepare("select * from categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
     }
}