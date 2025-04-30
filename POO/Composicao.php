<?php
    // Composição
    // Na composição, uma classe cria a instância de outra classe detro si própria, sendo assim, sendo assim quando ela for destruída, a outra classe também será

    class Pessoa{
        public function atribuirNome($nome){
            echo "O nome da pessoa é ". $nome;
        }
    }

    class Exibir{
        public $pessoa;
        public $nome;

        public function __construct($nome){
            $this->nome = $nome;
            $this->pessoa = new Pessoa();
        }

        public function exibirNome(){
            $this->pessoa->atribuirNome($this->nome);
        }
    }

    $exibir = new Exibir("Matheus");
    $exibir->exibirNome();
?>