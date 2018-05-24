<?php
/**
* classe de dominio Funcionario
* relacionada aos dados de um funcionario
* criado por Daniel Dias - 21/05/2018 - Versão 0.0.1
*/
class Funcionario {
  var $nome;
  var $registro;
  var $cpf;

  function __construct($nome, $registro, $cpf) {
    $this->nome = $nome;
    $this->registro = $registro;
    $this->cpf = $cpf;
  }
}

 ?>
