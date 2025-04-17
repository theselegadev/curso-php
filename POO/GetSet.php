<?php
    class Login{
        private $email;
        private $senha;

        public function setEmail($e){
            $this->email = $e;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setSenha($s){
            $this->senha = $s;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function Logar(){
            if($this->email === "teste@testegmail.com" and $this->senha === 123456){
                echo "dados válidos";
            }else{
                echo "dados inválidos";
            }
        }
    }

    $logar = new Login();
    $logar->setEmail("teste@testegmail.com");
    $logar->setSenha(123456);
    $logar->Logar();

    echo "<br>";
    echo $logar->getEmail();
    echo "<br>";
    echo $logar->getSenha();
?>