<?php

require_once "./Model/userModel.php";
require_once "./View/UserView.php";

class UserController{
    
     private $userModel;

     function __construct(){
         $this->userModel = new UserModel();
         $this->userView = new UserView();
     }

     function verLogin(){
          $this->userView->verLogin();
      }
     
     function confirmarLogin(){
          if(!empty($_POST["user"])&&!empty($_POST["password"])){
               $user = $_POST["user"];
               $password = $_POST["password"];
               

               //                // Obtengo el usuario de la base de datos
               // $user = $this->model->obtenerUser($user);
                    
               // // Si el usuario existe y las contraseñas coinciden
               // if ($user && password_verify($password, $user->password)) {

               //      session_start();
               //      $_SESSION["user"] = $user;
                    
               //      $this->view->showHome();
               // } else {
               //      $this->view->showLogin("Acceso denegado");
               // }


          $this->userView->login($user);
     }

     

}
}

