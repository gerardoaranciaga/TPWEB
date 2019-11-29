<?php

require_once  "./view/NoticiasView.php";
require_once  "./model/NoticiasModel.php";
require_once  "./model/LigasModel.php";
require_once  "./model/ComentariosModel.php";

class NoticiasController{

    private $view;
    private $modelNoticias;
    private $modelLigas;
    private $modelComentarios;
    
    function __construct(){
        $this->view = new NoticiasView();
        $this->modelNoticias = new NoticiasModel();
        $this->modelLigas = new LigasModel();
        $this->modelComentarios = new ComentariosModel();
    }

    function IsUserLogged(){
        session_start();
        return isset($_SESSION["User"]);
    }

    function MostrarNoticias(){
        $noticias = $this->modelNoticias->GetNoticias();
        $ligas = $this->modelLigas->GetLigas();
        $usuario = $this->IsUserLogged();
        $this->view->MostrarNoticias($noticias,$ligas,$usuario);
    }

    function AddNoticia(){
        $titulo = $_POST["tituloId"];
        $descripcion = $_POST["descripcionId"];
        $fecha = $_POST["fechaId"];
        $liga = $_POST["ligaId"];

        $this->modelNoticias->AddNoticia($titulo,$descripcion,$fecha,$liga);
        $this->MostrarNoticias();
    }

    function BorrarNoticia($idnoticia){
        $this->modelNoticias->BorrarNoticia($idnoticia);
        $this->MostrarNoticias();
    }

    function MostrarEditar($idnoticia){
        $usuario = $this->IsUserLogged();
        $noticia = $this->modelNoticias->GetNoticia($idnoticia);
        $this->view->MostrarEditar($noticia,$usuario);
    }

    function EditarNoticia(){
        $titulo = $_POST["tituloId"];
        $descripcion = $_POST["descripcionId"];
        $fecha = $_POST["fechaId"];
        $liga = $_POST["ligaId"];
        $idnoticia = $_POST["Id"];
    
        $this->modelNoticias->EditarNoticia($titulo,$descripcion,$fecha,$liga,$idnoticia);
        $this->MostrarNoticias();
    }

    function MostrarComentarios($params = null){
        $id_noticia = $params[":ID"];
        $usuario = $this->IsUserLogged();
        $login = false;
        $admin = false;
        $id_usuario = null;
        if(isset($_SESSION['User'])){
            $login = true;
            $id_usuario = $_SESSION['id_usuario'];
            if($_SESSION['admin']==true){
                $admin = true;
            }
        }
        $noticia = $this->modelNoticias->GetNoticia($id_noticia);
        $this->view->MostrarComentarios($noticia,$usuario,$admin,$login,$id_usuario);
    }

}
?>