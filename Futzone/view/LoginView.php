<?php

require_once ('libs/Smarty.class.php');

class LoginView{
    private $Smarty;

    function __construct()
    {
        $this->Smarty = new Smarty();
    }

    function MostrarLogin($message = '',$usuario){
        $this->Smarty->assign('logueado',$usuario);
        $this->Smarty->assign('Message',$message);
        $this->Smarty->display('templates/login.tpl');
    }

    function MostrarRegistro($usuario){
        $this->Smarty->assign('logueado',$usuario);
        $this->Smarty->display('templates/registrarse.tpl');
    }


}

?>
