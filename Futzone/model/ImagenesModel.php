<?php


class ImagenesModel{
    
    private $db;

    function __construct(){
        $this->db = $this->Connect();
    }

    function Connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=futbol;charset=utf8'
        , 'root', '');
    }
    function GetImagenes(){

    }

    public function SubirImagen($id, $imagen){

    }

    public function EliminarImagen($id_imagen){

    }

}


?>