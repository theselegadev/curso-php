<?php
    // Com o abstract eu defino o padrão da herança sem mostrar muitos os detalhes, abstraindo, igual nos métodos Sacar e Depositar, eu obrigo a classe herdeira a utiliza-los mas sem mostrar os detalhes.
    abstract class Banco {
        protected $saldo;
        protected $limiteSaque;

        public function __construct($saldo,$limiteSaque){
            $this->saldo = $saldo;
            $this->limiteSaque = $limiteSaque;
        }
            
        abstract function Sacar($s);
        abstract function Depositar($d);
    }

    class Itau extends Banco{
        public function Sacar($s){
            if($s>$this->limiteSaque){
                echo "<br> Limite de saque é: ". $this->limiteSaque;
            }else{
                $this->saldo -=$s;
                echo "<hr> Sacou: $s";
            }
        }
        public function Depositar($d){
            $this->saldo += $d;
            echo "<hr> Depositou: $d";
        }
        public function mostrarSaldo(){
            echo "<br>Saldo: ". $this->saldo;
        }
    }

    $itau = new Itau(1000,500);

    $itau->Sacar(100);
    $itau->mostrarSaldo();
    $itau->Depositar(100);
    $itau->mostrarSaldo();
    $itau->Sacar(1000);
?>