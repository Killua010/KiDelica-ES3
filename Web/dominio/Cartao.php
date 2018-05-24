<?php
/**
* classe de dominio Cartao
* relacionada a forma de pagamento do pedido
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Cartao {
  var $bandeira;
  var $numero;
  var $valorCartao;

  function __construct($bandeira, $numero, $valorCartao) {
    $this->bandeira = $bandeira;
    $this->numero = $numero;
    $this->valorCartao = $valorCartao;
  }
}

 ?>
