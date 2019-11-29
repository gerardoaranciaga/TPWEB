<?php

require_once ('libs/Smarty.class.php');

class AdminView{
    private $Smarty;

    function __construct()
    {
        $this->Smarty = new Smarty();
    }

    function MostrarAdmin($ligas,$usuario,$usuarios){
        $this->Smarty->assign('ligas',$ligas);
        $this->Smarty->assign('logueado',$usuario);
        $this->Smarty->assign('usuarios',$usuarios);
        $this->Smarty->display('templates/admin.tpl');
    }

}

?>
