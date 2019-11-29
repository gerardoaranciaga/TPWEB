<?php


class ComentariosModel{
    
    private $db;

    function __construct(){
        $this->db = $this->Connect();
    }

    function Connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=futbol;charset=utf8'
        , 'root', '');
    }

    function GetComentarios(){
        $sentencia = $this->db->prepare("select * from comentarios");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetComentariosPorN($id){
        $sentencia = $this->db->prepare("select * from comentarios where id_noticia=$id");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetComentario($id){
        $sentencia = $this->db->prepare("select * from comentarios where id_comentario=$id");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function BorrarComentario($id){
        $sentencia = $this->db->prepare("delete from comentarios where id_comentario=$id");
        $sentencia->execute();
    }

    function AgregarComentario($id_noticia,$id_usuario,$comentario,$puntaje,$fecha){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(id_noticia,id_usuario,comentario,puntaje,fecha) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($id_noticia, $id_usuario,$comentario,$puntaje,$fecha));
    }

}


 ?>
