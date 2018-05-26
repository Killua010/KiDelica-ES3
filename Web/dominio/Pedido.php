<?php
/**
* classe de dominio Pedido
* relacionada aos Pedidos dos clientes
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Pedido {
  var $produtos = array();
  function __construct($produto) {
    array_push($this->produtos, $produto);
  }
}

 ?>
