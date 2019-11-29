<?php

require_once "Router.php";
require_once "api/ComentariosApiController.php";
require_once "controller/NoticiasController.php";


    $router = new Router();
    
    $router->addRoute("comentarios/:ID", "GET", "ComentariosApiController", "GetComentariosPorN");
    $router->addRoute("verdetalles/:ID", "GET", "NoticiasController", "MostrarComentarios");
    $router->addRoute("comentarios/:ID", "DELETE", "ComentariosApiController", "BorrarComentario");
    $router->addRoute("comentarios", "POST", "ComentariosApiController", "AgregarComentario");

    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 

?>
