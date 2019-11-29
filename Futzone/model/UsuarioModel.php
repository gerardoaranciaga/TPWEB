<?php


class UsuarioModel{
    
    private $db;

    function __construct(){
        $this->db = $this->Connect();
    }

    function Connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=futbol;charset=utf8'
        , 'root', '');
    }

    function GetUsuario($id_usuario){
        $sentencia = $this->db->prepare("select * from usuarios where nombre=?");
        $sentencia->execute(array($id_usuario));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function AddUsuario($nombre,$email,$hash){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(nombre, email, clave) VALUES(?,?,?)");
        $sentencia->execute(array($nombre,$email,$hash));
    }

    function GetUsuarios(){
        $sentencia = $this->db->prepare("select * from usuarios");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function HacerAdmin($usuario){
        $sentencia = $this->db->prepare("UPDATE usuarios set admin = 0 where id_usuario=?");
        $sentencia->execute(array($usuario[0]));
    }

    function SacarAdmin($usuario){
        $sentencia = $this->db->prepare("UPDATE usuarios set admin = NULL where id_usuario=?");
        $sentencia->execute(array($usuario[0]));
    }

    function EliminarUsuario($usuario){
      $sentencia = $this->db->prepare("DELETE from usuarios where id_usuario=?");
      $sentencia->execute(array($usuario[0]));
    }


}


 ?>
