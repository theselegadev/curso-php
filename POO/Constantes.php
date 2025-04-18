<?php
    class Pessoa{
        const nome = "Matheus";

        public function exibirNome(){
            echo self::nome;
        }
    }

    class Matheus extends Pessoa{
        const nome = "Seleghin";

        public function exibirNome(){
            echo self::nome;
            echo parent::nome;
        }
    }
?>