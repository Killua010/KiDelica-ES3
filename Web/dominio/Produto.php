<?php
/**
* classe de dominio Produto
* relacionada aos produtos da lanchonete
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Produto {
  var $valor;
  var $id;
  var $nome;
  var $descricao;

  function __construct($valor, $id, $nome, $descricao) {
    $this->valor = $valor;
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
  }
}

 ?>
