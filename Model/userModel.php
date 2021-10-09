<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    function obtenerUser($userIns){
        $userAdmi = $this->db->prepare("SELECT * FROM user WHERE = $userIns");
        $userAdmi->execute();
        $userAdmi = $userAdmi->fetch(PDO::FETCH_OBJ);
        return $userAdmi;// si tengo que buscar usuarios no admi tengo que cambiarle el nombre
    }
}