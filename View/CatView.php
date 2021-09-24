<?php

class CatView{

    function __construct()
    {
        
    }

    function mostrarTablaCategorias($categorias){
        $html = '<h1>Categorias linea 11</h1>' ;
       
        foreach($categorias as $categoria) {
            $html.= '<li>lista:'.$categoria->tipo_categoria.'</li>';

        }
        echo $html;
    } 

}