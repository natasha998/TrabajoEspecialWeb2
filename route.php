<?php
require_once "./Controler/Controler.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$Cont = new Controler();




// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
       $Cont->mostrarHome();
     break;
     case 'about': 
        $Cont->mostarContacto();
      break;
     case 'categorias': 
        $Cont->mostrarTablaCategoria();
     break;
     case 'mostrarTablaProductos':
        $Cont->mostrarTablaProductos($params[1]);
     break;
     case 'productoUnico':
        $Cont->verProducto($params[1]);
        break;
    default: 
        echo('404 Page not found'); 
        break;
}


?>

       