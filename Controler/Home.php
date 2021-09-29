<?php

require_once "./View/HomeView.php";

class Home{

    private $view;

    function __construct(){
        $this->view = new HomeView();
    }

    function mostrarHome(){
        $this->view->mostrarHome();
    }
}