<?php
  /**
   *
   */
   require 'iViewHelper.php';
  class ViewHelperPedido implements iViewHelper {

    function __construct() {

    }

    public function getEntidade() {
      require '..\dominio\Produto.php';
      require '..\dominio\Funcionario.php';
      require '..\dominio\Bebida.php';
      require '..\dominio\Cartao.php';
      require '..\dominio\Cozinheiro.php';
      require '..\dominio\Credito.php';
      require '..\dominio\Debito.php';
      require '..\dominio\Dinheiro.php';
      require '..\dominio\EstadoPedido.php';
      require '..\dominio\FeitoNaHora.php';
      require '..\dominio\Garcom.php';
      require '..\dominio\Ingrediente.php';
      require '..\dominio\Lanche.php';
      require '..\dominio\Marca.php';
      require '..\dominio\Pagamento.php';
      require '..\dominio\Pedido.php';
      require '..\dominio\Porcoes.php';
      require '..\dominio\Sobremesa.php';


      $nome = "Refrigerante";
      $registro;
      $cpf;
      $marca = "Coca Cola";
      $saborBebida = "Coca Cola";
      $saborSobremesa;
      $ingrediente;
      $quantidade;
      $valor = 10.00;
      $id = 3;
      $nome;
      $descricao = "Refiregerante muito bom!";
      $estado;
      $bandeira;
      $numero;
      $valorCartao;
      $valorDinheiro;
      $valorTotal;


      $Marca = new Marca($marca);
      $Bebida = new Bebida($saborBebida,$marca,$valor, $id, $nome, $descricao);

      return $Bebida;



    }

    public function setEntidade($ED, $httpResponse) {

    }
  }

 ?>
