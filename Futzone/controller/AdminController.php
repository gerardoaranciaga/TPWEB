<?php

require_once  "./view/AdminView.php";
require_once  "./model/LigasModel.php";
require_once  "./model/NoticiasModel.php";
require_once  "./model/UsuarioModel.php";

class AdminController{
  
    private $view;
    private $modelLigas;
    private $modelNoticias;
    private $modelUsuarios;

    function __construct(){
        $this->view = new AdminView();
        $this->modelLigas = new LigasModel();
        $this->modelNoticias = new NoticiasModel();
        $this->modelUsuarios = new UsuarioModel();
    }

    function IsUserLogged(){
        session_start();
        return isset($_SESSION["User"]);
    }

    function IsAdmin(){
        session_start();
        if($_SESSION["admin"] == true){
            return true;
        }
        else{
            return false;
        }
    }

    function MostrarAdmin(){
        $usuario = true;
        $ligas = $this->modelLigas->GetLigas(); 
        $usuarios = $this->modelUsuarios->GetUsuarios();
        $this->view->MostrarAdmin($ligas,$usuario,$usuarios);
    }

    function AgregarLiga(){
        $liga = $_POST["ligaId"];
        $pais = $_POST["paisId"];
        $admin = $this->IsAdmin();
        if($admin == true){
            $this->modelLigas->AgregarLiga($liga,$pais);
            $this->MostrarAdmin();
        }
    }

    function HacerAdmin($usuario){
        $admin = $this->IsAdmin();
        if($admin == true){
            $this->modelUsuarios->HacerAdmin($usuario);
            $this->MostrarAdmin();
        }
    }

    function SacarAdmin($usuario){
        $admin = $this->IsAdmin();
        if($admin == true){
            $this->modelUsuarios->SacarAdmin($usuario);
            $this->MostrarAdmin();
        }
    }

    function EliminarUsuario($usuario){
        $admin = $this->IsAdmin();
        if($admin == true){
            $this->modelUsuarios->EliminarUsuario($usuario);
            $this->MostrarAdmin();
        }
    }

    function EliminarLiga($liga){
        $admin = $this->IsAdmin();
        if($admin == true){
            $this->modelLigas->EliminarLiga($liga);
            $this->MostrarAdmin();
        }
    }
}

 ?>