<?php
    // Agregação
    // Na agragação, uma classe precisa de outra para executar uma ação, ou seja, uma classe utiliza a outra como parte de si

    class Produto{
        public $nome;
        public $valor;

        public function __construct($nome,$valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    class Carrinho {
        public $produtos;

        public function adicionar(Produto $produto){
            $this->produtos[] = $produto;
        }

        public function exibir(){
            foreach($this->produtos as $produto){
                echo "Nome: ".$produto->nome."<hr>";
                echo "Valor:".$produto->valor."<hr>";
            }
        }
    }

    $produto1 = new Produto("Refrigerante","12,99");
    $produto2 = new Produto("Salgado","5,90");
    
    $carrinho = new Carrinho();
    $carrinho->adicionar($produto1);
    $carrinho->adicionar($produto2);
    
    $carrinho->exibir();
?>