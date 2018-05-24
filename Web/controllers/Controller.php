<?php

  /**
   *
   */
  class Controller {

    function __construct() {
    }

    function dadosSalvar() {
      require '..\views\viewHelperPedido.php';
      $viewHelper = new ViewHelperPedido();
      $ED = $viewHelper->getEntidade();
      echo $ED->getSabor(); 
    }
  }

  $ctr = new Controller();
  $ctr->dadosSalvar();

 ?>
