<?php 

require_once "./view/FutzoneView.php";

class FutzoneController{

    private $view;
    private $model;

    function IsUserLogged(){
        session_start();
        return isset($_SESSION["User"]);
    }
    function __construct(){
        $this->view = new FutzoneView();
    }

    function Home(){
        $usuario = $this->IsUserLogged();
        $this->view->Mostrar($usuario);
    }

    function Posiciones(){
        $usuario = $this->IsUserLogged();
        $this->view->Posiciones($usuario);
    }


    function Login(){
        $usuario = $this->IsUserLogged();
        $this->view->Login($usuario);
    }

    
}







?>