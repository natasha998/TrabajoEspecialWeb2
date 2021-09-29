<?php

class CatModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
     }

     function valoresTablaCategoria(){
        $sentencia = $this->db->prepare("select * from categoria");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
     }

      function insertarTablaCategorias($nombre_c,$tipo_c){
        $sentencia = $this->db->prepare('INSERT INTO categorias (id_categoria,nombre_categoria,tipo_categoria) VALUES (NULL,?,?,?)');
        $sentencia->execute(array($nombre_c,$tipo_c));
     }
}