<?php
/**
* classe de dominio Sobremesa
* relacionada aos produtos da lanchonete
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Sobremesa extends FeitoNaHora {
  var $sabor;

  function __construct($sabor) {
    $this->sabor = $sabor;
  }
}

 ?>
