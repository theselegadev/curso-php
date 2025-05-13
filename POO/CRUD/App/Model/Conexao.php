<?php
    namespace App\Model;

    class Conexao{
        private static $instace;

        public static function getConn(){
            if(!isset(self::$instace)){
                self::$instace = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
            }else{
                return self::$instace;
            }
        }
    }