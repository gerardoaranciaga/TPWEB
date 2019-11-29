<?php

require_once ('libs/Smarty.class.php');

class NoticiasView{
    
    private $Smarty;

    function __construct()
    {
        $this->Smarty = new Smarty();
    }

    function MostrarNoticias($noticias,$ligas,$usuario){

        $this->Smarty->assign('noticias',$noticias);
        $this->Smarty->assign('ligas',$ligas);
        $this->Smarty->assign('logueado',$usuario);
        $this->Smarty->display('templates/noticias.tpl');
    }

    function MostrarEditar($noticia,$usuario){
        $this->Smarty->assign('logueado',$usuario);
        $this->Smarty->assign('noticias',$noticia);
        $this->Smarty->display('templates/editar.tpl');
    }

    function MostrarComentarios($noticia,$usuario,$admin,$login,$id_usuario){
        $this->Smarty->assign('logueado',$usuario);
        $this->Smarty->assign('noticia',$noticia);
        $this->Smarty->assign('admin',$admin);
        $this->Smarty->assign('login',$login);
        $this->Smarty->assign('id_usuario',$id_usuario);
        $this->Smarty->display('templates/comentarios.tpl');
    }



}

?>
