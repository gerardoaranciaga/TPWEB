<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";

class LoginController{

    private $view;
    private $model;

    function __construct()    {
      $this->view = new LoginView();
      $this->model = new UsuarioModel();
    }

    function MostrarLogin(){
        //$hash = password_hash('contraseña2', PASSWORD_DEFAULT);
        $usuario = $this->IsUserLogged();
        $this->view->MostrarLogin("",$usuario);
    }

    function IsUserLogged(){
        session_start();
        return isset($_SESSION["User"]);
    }
    
    function Logout(){
      session_start();
      session_destroy();
      header(LOGIN);
    }
  
    function VerificarLogin(){
        $usuario = $_POST["usuarioId"];
        $pass = $_POST["passwordId"];
        
        $dbUsuario = $this->model->GetUsuario($usuario);

        if($dbUsuario != null){
            if (password_verify($pass, $dbUsuario[0]["clave"])){
                session_start();
                $_SESSION["User"] = $usuario;
                $_SESSION["id_usuario"] = $dbUsuario[0]["id_usuario"];
                $_SESSION["admin"] = false;
                header(NOTICIAS);
            }else{
                $usuario = $this->IsUserLogged();
                $this->view->MostrarLogin("Contraseña incorrecta",$usuario);
            }
        }else{
            $usuario = $this->IsUserLogged();
            $this->view->MostrarLogin("No existe el usario",$usuario);
        }
    }

    function VerificarLoginAdmin(){
        $usuario = $_POST["usuarioId"];
        $pass = $_POST["passwordId"];
        
        $dbUsuario = $this->model->GetUsuario($usuario);
            
        if($dbUsuario != null){
            if (password_verify($pass, $dbUsuario[0]["clave"])){
                if($dbUsuario[0]["admin"] != null){
                    session_start();
                    $_SESSION["User"] = $usuario;
                    $_SESSION["id_usuario"] = $dbUsuario[0]["id_usuario"];
                    $_SESSION["admin"] = true;
                    header(ADMIN);
                }else{
                    $this->view->MostrarLogin("No eres administrador",$usuario);
                }
            }else{
                $this->view->MostrarLogin("Contraseña incorrecta",$usuario);
            }
        }else{
            $this->view->MostrarLogin("No existe el usario",$usuario);
        }
    }
    
    function AddUsuario(){
        $usuario = $_POST["usuarioId"];
        $email = $_POST["emailId"];
        $pass = $_POST["passwordId"];
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $this->model->AddUsuario($usuario,$email,$hash);
        $this->view->MostrarLogin("Cargado correctamente");
    }

    function MostrarRegistro(){
        $usuario = $this->IsUserLogged();
        $this->view->MostrarRegistro($usuario);
    }
  
}

?>