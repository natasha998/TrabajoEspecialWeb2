<?php

class ProdView{

    function __construct()
    {
        
    }

    function mostrarTablaProductos($productos){
        $html = '<h1>Productos</h1>' ;
        
        foreach($productos as $producto) {
            $html.= '<li>'.$producto->tipo_p.'</li>';

        }
        echo $html;
    }


}
