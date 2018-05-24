<?php
/**
* classe de dominio Bebida
* relacionada a um Produto de Bebida
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Bebida extends Produto {
  var $sabor;
  var $marca;

  function __construct($sabor, $marca, $valor, $id, $nome, $descricao) {
    $this->sabor = $sabor;
    $this->marca = $marca;
    $this->valor = $valor;
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
  }

  function getSabor(){
    return $this->sabor;
  }
}

 ?>
