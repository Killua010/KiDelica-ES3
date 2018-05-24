<?php
/**
* classe de dominio Produto
* relacionada aos ingredientes da lanchonete
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Ingrediente {
  var $ingrediente;
  var $quantidade;

  function __construct($ingrediente, $quantidade) {
    $this->ingrediente = $ingrediente;
    $this->quantidade = $quantidade;
  }
}

 ?>
