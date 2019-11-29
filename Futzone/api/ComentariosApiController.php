<?php
require_once ("./Model/ComentariosModel.php");
require_once ("./Model/ImagenesModel.php");
require_once ("JSONView.php");
require_once ("ApiController.php");

class ComentariosApiController extends ApiController {
    
    private $model;
    private $modelImagenes;
    
    public function __construct() {
        parent::__construct();
        $this->model = new ComentariosModel();
        $this->modelImagenes = new ImagenesModel();
    }
    
    function GetComentariosPorN($params = []){
        $id = $params[':ID'];
        $comentarios = $this->model->GetComentariosPorN($id);
        if ($comentarios) {
            $this->view->response($comentarios, 200);
        } else {
            $this->view->response(false, 404);
        }
    }

    function AgregarComentario(){
        $body = $this->getData();
        $id_noticia = $body->id_noticia;
        $id_usuario = $body->id_usuario;
        $comentario = $body->comentario;
        $puntaje = $body->puntaje;
        $fecha = $body->fecha;
        if(($comentario != "")&&($puntaje != "")){
            $this->model->AgregarComentario($id_noticia,$id_usuario,$comentario,$puntaje,$fecha);
        }
    }

    public function BorrarComentario($params = []){
        $id = $params[':ID'];
        $comentario = $this->model->GetComentario($id);
        if ($comentario) {
            $this->model->BorrarComentario($id);
            $this->view->response("Comentario eliminado con exito", 200);
        }
        else
            $this->view->response("Comentario no encontrado", 404);
    }
}
    
