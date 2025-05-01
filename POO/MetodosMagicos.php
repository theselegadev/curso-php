<?php
    // Métodos mágicos
    // invoke
    // tostring
    // get
    // set

    class Pessoa {
        public $dados = array();

        public function __set($name, $value){
            $this->dados[$name] = $value;
        }

        public function __get($name){
            return $this->dados[$name];
        }

        public function __toString(){
            return "Tentei imprimir o objeto <br>";
        }

        public function __invoke(){
            echo "Chamando o objeto com função <br>";
        }
    }

    // __set
    $pessoa = new Pessoa();
    $pessoa->nome = "Matheus";
    $pessoa->idade = "18";
    $pessoa->sexo = "M";

    // __get
    echo $pessoa->nome."<br>";
    echo $pessoa->idade."<br>";
    echo $pessoa->sexo."<br>";
    // __invoke
    $pessoa();
    // __toString
    echo $pessoa;
?>