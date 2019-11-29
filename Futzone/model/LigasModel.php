<?php


class LigasModel
{
    private $db;

    function __construct(){
        $this->db = $this->Connect();
    }

    function Connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=futbol;charset=utf8'
        , 'root', '');
    }

    function GetLigas(){
        $sentencia = $this->db->prepare("select * from ligas");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function AgregarLiga($liga,$pais){
        $sentencia = $this->db->prepare("INSERT INTO ligas(nombre, pais) VALUES(?,?)");
        $sentencia->execute(array($liga,$pais));
    }

    function EliminarLiga($liga){
        $sentencia = $this->db->prepare("DELETE from ligas where id_liga=?");
        $sentencia->execute(array($liga[0]));
    }

}


 ?>
