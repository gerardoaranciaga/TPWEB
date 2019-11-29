<?php


class NoticiasModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=futbol;charset=utf8'
    , 'root', '');
  }

  function GetNoticias(){
      $sentencia = $this->db->prepare("select * from noticias");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetNoticia($idnoticia){
      $sentencia = $this->db->prepare("select * from noticias where id_noticia=?");
      $sentencia->execute(array($idnoticia[0]));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AddNoticia($titulo,$descripcion,$fecha,$liga){
      $sentencia = $this->db->prepare("INSERT INTO noticias(id_liga, titulo, descripcion, fechaCreacion) VALUES(?,?,?,?)");
      $sentencia->execute(array($liga,$titulo,$descripcion,$fecha));

  }

  function BorrarNoticia($idnoticia){
      $sentencia = $this->db->prepare("delete from noticias where id_noticia=?");
      $sentencia->execute(array($idnoticia[0]));
  }

  function EditarNoticia($titulo,$descripcion,$fecha,$liga,$idnoticia){
      $sentencia = $this->db->prepare( "UPDATE noticias set titulo = ?, descripcion = ?, fechaCreacion = ?, id_liga=? where id_noticia=?");
      $sentencia->execute(array($titulo,$descripcion,$fecha,$liga,$idnoticia));
  }


}


 ?>
