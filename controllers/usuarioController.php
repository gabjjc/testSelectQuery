<?php

include_once "../models/usuarioModel.php";

class usuarioController{
    
  /**
   * Función que devuelve todos los usuarios registrados.
   */
  public function getUsuarios(){
    $model = new usuarioModel();  
    return $model->getUsuarios();
  }

  /**
   * Función que valida si el usuario existe en base al ID ingresado
   */
  public function findUsuario(){
    $model = new usuarioModel();
    
    $idUsuario = $_REQUEST['inputIdUsuario'];
    $usuario = $model->findUsuario($idUsuario);
    
    if($usuario){
        header('Location: ../views/usuario.php?id='.$idUsuario);
        die();
    }
    return  "El ID ingresao no existe";
  }

  /**
   * Función que retorna el usuario en base al ID
   */
  public function getUsuario($idUsuario){
    
    $model = new usuarioModel();
    return $model->getUsuario($idUsuario);
  }
     
}