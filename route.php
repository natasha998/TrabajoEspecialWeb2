<?php
require_once "./Controler/CatControler.php";
require_once "./Controler/ProdControler.php";

require_once "./Controler/Home.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$CategoriaCont = new CatControler();

$ProductosCont = new ProdControler();

$home = new Home();


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
       $home->mostrarHome();
     break;
     case 'categorias': 
        $CategoriaCont->mostrarTablaCategoria();
     break;
     case 'mostrarTablaProductos':
        $ProductosCont->mostrarTablaProductos($params[1]);
     break;
     case 'productoUnico':
        $ProductosCont->verProducto($params[1]);
        break;
    default: 
        echo('404 Page not found'); 
        break;
}


?>

       