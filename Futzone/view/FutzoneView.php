<?php
require('libs/Smarty.class.php');


class FutzoneView{

    private $Smarty;

    function __construct()
    {
        $this->Smarty = new Smarty();
    }

    function Mostrar($usuario){
        $Smarty = new Smarty();
        $Smarty->assign('logueado',$usuario);
        $Smarty->display('templates/home.tpl');
    }
    function Posiciones($usuario){
        $Smarty = new Smarty();
        $Smarty->assign('logueado',$usuario);
        $Smarty->display('templates/posiciones.tpl');
    }
    function Noticias($usuario){
        $Smarty = new Smarty();
        $Smarty->assign('logueado',$usuario);
        $Smarty->display('templates/noticias.tpl');
    }
    function Login($usuario){
        $Smarty = new Smarty();
        $Smarty->assign('logueado',$usuario);
        $Smarty->display('templates/login.tpl');
    }
    
}
?>