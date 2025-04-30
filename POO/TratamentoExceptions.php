<?php
    class Newsletter {
        public function cadastrarEmail($email){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                throw new Exception("Esse email é inválido",1);
            }else{
                echo "Email válido";
            }
        }
    }

    $newletter = new Newsletter();

    try{
        $newletter->cadastrarEmail("seleghin@");
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>