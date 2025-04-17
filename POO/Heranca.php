<?php
    class Veiuculo{
        private $modelo;
        private $cor;
        private $ano;

        public function __construct($modelo,$cor,$ano){
            $this->setModelo($modelo);
            $this->setCor($cor);
            $this->setAno($ano);
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setAno($a){
            $this->ano = $a;
        }

        public function getAno(){
            return $this->ano;
        }

        public function Andar(){
            echo "Andando<br>";
        }

        public function Parar(){
            echo "Parando<br>";
        }
    }

    class Carro extends Veiuculo{
        public function LimparParabrisa(){
            echo "Limpando parabrisa<br>";
        }
    }

    class Moto extends Veiuculo{
        public function darGrau(){
            echo "Dando Grau<br>";
        }
    }

    $moto = new Moto("Hornet","Cinza","2024");
    $carro = new Carro("Lancer evo","Preto","2015");

    $moto->Andar();
    $moto->Parar();
    $carro->Andar();
    $carro->Parar();

    $moto->darGrau();
    $carro->LimparParabrisa();

    echo $moto->getModelo()."<br>";
    echo $moto->getCor()."<br>";
    echo $moto->getAno()."<br>";

    echo $carro->getModelo()."<br>";
    echo $carro->getCor()."<br>";
    echo $carro->getAno()."<br>";
?>