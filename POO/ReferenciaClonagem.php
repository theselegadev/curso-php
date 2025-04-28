<?php
    // Referência e clonagem

    class Pessoa{
        public $idade;

        // Método mágico clone
        public function __clone(){
            echo "Método mágico clone";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->idade = 25;
    // Referência
    $pessoa2 = $pessoa;
    $pessoa2->idade = 35;
    echo $pessoa->idade;
    // Clonagem e chamada do método clone
    $pessoa2 = clone $pessoa;
    $pessoa2->idade = 20;
    echo $pessoa->idade;
?>