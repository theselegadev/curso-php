<?php
    class Pessoa {
        public $nome;
        public $idade;

        public function Falar(){
            echo $this->nome." de ". $this->idade." anos acabou de falar <br>";
        }
    }

    $matheus = new Pessoa();
    $matheus->nome = "Matheus";
    $matheus->idade = 18;
    $matheus->Falar();

    var_dump($matheus);
?>