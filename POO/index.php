<?php
    require "classes/produto.php";
    require "models/produto.php";

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

    use classes\Produto as productClasses;
    use models\Produto as productModels;

    $produtoClasses = new productClasses();
    $produtoClasses->mostrarDetalhes();
    
    $produtoModels = new productModels();
    $produtoModels->mostrarDetalhes();
?>