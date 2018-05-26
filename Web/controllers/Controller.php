<?php

  /**
   *
   */
  class Controller {
    var $map;

    function __construct() {
      $this->map = array(
        "pedido" => array(
          0 => '..\views\viewHelperPedido.php',
          1 => 'ViewHelperPedido')
      );

    }

    function dadosSalvar() {
      require $this->map["pedido"][0];
      require 'SalvarCMD.php';
      $viewHelper = new $this->map["pedido"][1];
      $ED = $viewHelper->getEntidade();
      $slvCMD = new SalvarCMD();
      $slvCMD->executar($ED);
    //  echo $ED->getSabor();

    }
  }

  $ctr = new Controller();
  $ctr->dadosSalvar();

 ?>
