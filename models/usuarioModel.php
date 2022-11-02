<?php

class usuarioModel{

  private $db;

  public function __construct()
  {
      $this->db = DB::connexion();
  }



  public function getUsuarios(){
   $response = array();
   $sql = "SELECT id, nombre, apellido, email
           FROM usuario";

   if ($result = $this->db->query($sql)) {
       $response = $result;
   }
   return $response;
 }


 public function findUsuario($idUsuario){
    $sql = "SELECT id, nombre, apellido, email
            FROM usuario
            WHERE id = " . $idUsuario;
 
    $result = $this->db->query($sql);
    
    return ($result->num_rows > 0) ? true : false; 
    /*
     if($result->num_rows > 0){
         return true;
     }else{
         return false;
     }
     */
 }

 
 public function getUsuario($idUsuario){
    
    $sql = "SELECT id, nombre, apellido, email
            FROM usuario
            WHERE id = " . $idUsuario;
 
    $result = $this->db->query($sql);
    
    return $result->fetch_array();
 }


}
