<?php

  /**
   *
   */
  class Controller {

    function __construct() {
    }

    function dadosSalvar() {
      require '..\views\viewHelperPedido.php';
      require 'SalvarCMD.php';
      $viewHelper = new ViewHelperPedido();
      $ED = $viewHelper->getEntidade();
      $slvCMD = new SalvarCMD();
      $slvCMD->executar($ED);
      //echo $ED->getSabor();

    }
  }

  $ctr = new Controller();
  $ctr->dadosSalvar();

 ?>
