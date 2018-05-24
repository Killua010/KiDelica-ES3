<?php
/**
 *
 */
 require 'iFachada.php';
class Fachada implements iFachada {

  function __construct() {

  }

  public function inserir($ED){
    echo $ED->getSabor();
  }

  public function alterar($ED){

  }

  public function consultar($ED){

  }

  public function excluir($ED){

  }

}

 ?>
