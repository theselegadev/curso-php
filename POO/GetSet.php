<?php
    class Login{
        private $email;
        private $senha;
        private $nome;

        public function __construct($email,$senha, $nome){
            $this->setSenha($senha);
            $this->setEmail($email);
            $this->nome = $nome;
        }

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

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }

        public function Logar(){
            if($this->email === "teste@testegmail.com" and $this->senha === 123456){
                echo "dados válidos";
            }else{
                echo "dados inválidos";
            }
        }
    }

    $logar = new Login("teste@testegmail.com",123456,"matheus");
    $logar->Logar();

    echo "<br>";
    echo $logar->getEmail();
    echo "<br>";
    echo $logar->getSenha();
    echo "<br>";
    echo $logar->getNome();
?>