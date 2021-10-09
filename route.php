<?php

require_once "./Controller/CatController.php";
require_once "./Controller/ProdController.php";
require_once "./Controller/UserController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$CatController = new CatController();
$ProdController = new ProdController();
$userController = new UserController();




// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
       $CatController->mostrarHome();
     break;
     case 'about': 
        $CatController->mostarContacto();
      break;
     case 'categorias': 
        $CatController->mostrarTablaCategoria();
     break;
     case 'insertarCategorias':
        $CatController->insertarCategorias();
        break;
     case 'productos':
        $ProdController->tablaProducto();
        break;
    case 'agregarProductos':
      $CatController->agregarProductos();
      break;
     case 'mostrarTablaProductos':
        $ProdController->mostrarTablaProductos($params[1]);
     break;
     case 'productoUnico':
        $ProdController->verProducto($params[1]);
        break;
      case 'editarCat':
         $CatController->editarCat(2);
      break;
      case 'borrarCat':
         echo "Si borra la categoria debe borrar todos los productos asociadas a ella";
         $CatController->borrarCat($params[1]);
      break;
      case 'editarProd':
         $ProdController->editarProd($params[1]);
      break;
      case 'borrarProd':
         $ProdController->borrarProd($params[1]);
      break;
      case 'productoUnico':
         $ProdController->verProducto($params[1]);
      break;
     case 'login':
        $userController->verLogin();
        break;
      case 'confirmarLogin':
         $userController->confirmarLogin();
      break;
 
    default: 
        echo('404 Page not found'); 
        break;
}


?>

       