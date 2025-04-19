<?php
    class Login {
        public static $user;

        public static function VerificaLogin(){
            echo "O usuario ". self::$user. " está logado!";
        }
    }

    Login::$user = "admin";
    Login::VerificaLogin();
?>