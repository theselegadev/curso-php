<?php
    // Associções
    // Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro

    class Pedido{
        public $numero;
        public $cliente;

        public function __construct($num,$clie){
            $this->numero = $num;
            $this->cliente = $clie;
        }
    }

    class Cliente{
        public $nome;
        public $endereco;

        public function __construct($name,$ender){
            $this->nome = $name;
            $this->endereco = $ender;
        }
    }

    $cliente = new Cliente("Matheus","Alphavile 255");
    $pedido = new Pedido(1,$cliente);

    $dados = array(
        "numero" => $pedido->numero,
        "nome_cliente" => $pedido->cliente->nome,
        "endereco_cliente" => $pedido->cliente->endereco
    );

    var_dump($dados);
?>