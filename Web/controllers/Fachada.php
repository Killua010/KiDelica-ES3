<?php
/**
 *
 */
 require 'iFachada.php';
class Fachada implements iFachada {

  var $map;

  function __construct() {
    $this->map = array(
      "Pedido" => array(
        0 => array(
          0 => '..\negocio\stValidarDadosPedido.php',
          1 => 'stValidarDadosPedido'),
        1 => array(
          0 => '..\negocio\stCalcularTotalPedido.php',
          1 => 'stCalcularTotalPedido'))
    );
  }

  public function inserir($ED){
    $dominio = $this->map[get_class ($ED)];
    foreach ($dominio as &$indice) {
        require $indice[0];
        echo $indice[1]. "<br />";
    }
  }

  public function alterar($ED){

  }

  public function consultar($ED){

  }

  public function excluir($ED){

  }

}

 ?>
