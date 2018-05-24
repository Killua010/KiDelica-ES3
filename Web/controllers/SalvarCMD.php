<?php
require 'iCommand.php';
/**
 *
 */
class SalvarCMD implements iCommand{

  function __construct() {

  }

  public function executar($ED) {
    require 'Fachada.php';

    $fachada = new Fachada();
    $fachada->inserir($ED);
  }
}

 ?>
