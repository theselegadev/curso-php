<?php
    include_once "./conexao.php";

    function clear($input){
        global $conexao;
        // sql injection
        $var = mysqli_escape_string($conexao,$input);

        // cross site scripting
        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST) && !empty($_POST)){
        $nome = clear($_POST['nome']);
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);

        $query = "insert into clientes (nome,sobrenome,email) values('$nome','$sobrenome','$email')";

        if(mysqli_query($conexao,$query)){
            header("Location: ./index.php?sucesso");
        }else{
            header("Location: ./index.php?erro");
        }
    }
?>