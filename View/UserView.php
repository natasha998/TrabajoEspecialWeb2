<?php
require_once './libs/Smarty.class.php';

class UserView{

    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }


    function verLogin(){
        $this->smarty->display('templetes/userAdmi.tpl');
    }

    function login($user){

        $this->smarty->assign('login', $user);
        $this->smarty->display('templetes/userAdmi.tpl');
    }
    
}