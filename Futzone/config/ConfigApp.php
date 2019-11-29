<?php

//Direcciones
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
define('NOTICIAS', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/noticias');
define('LOGUEADO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logueado');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/mostrarLogin');
define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'FutzoneController#Home',
      'logout'=> 'LoginController#Logout',
      'home'=> 'FutzoneController#Home',
      'posiciones'=> 'FutzoneController#Posiciones',
      'noticias'=> 'NoticiasController#MostrarNoticias',
      'login'=> 'LoginController#MostrarLogin',
      'verificarLogin'=> 'LoginController#VerificarLogin',
      'verificarLoginAdmin'=> 'LoginController#VerificarLoginAdmin',
      'agregarUsuario'=> 'LoginController#MostrarRegistro',
      'insertarUsuario'=> 'LoginController#AddUsuario',
      'agregarNoticia'=> 'NoticiasController#AddNoticia',
      'borrarNoticia'=> 'NoticiasController#BorrarNoticia',
      'editarNoticia'=> 'NoticiasController#EditarNoticia',
      'mostrarEditarNoticia'=> 'NoticiasController#MostrarEditar',
      'admin'=> 'AdminController#MostrarAdmin',
      'agregarLiga'=> 'AdminController#AgregarLiga',
      'mostrarEditarLiga'=> 'AdminController#EditarLiga',
      'hacerAdmin'=> 'AdminController#HacerAdmin',
      'sacarAdmin'=> 'AdminController#SacarAdmin',
      'eliminarUsuario'=> 'AdminController#EliminarUsuario',
      'eliminarLiga'=> 'AdminController#EliminarLiga'
    ];

}

 ?>
