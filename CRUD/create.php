<?php
    include_once "./conexao.php";

    if(isset($_POST) && !empty($_POST)){
        $nome = mysqli_escape_string($conexao,$_POST['nome']);
        $sobrenome = mysqli_escape_string($conexao,$_POST['sobrenome']);
        $email = mysqli_escape_string($conexao,$_POST['email']);

        $query = "insert into clientes (nome,sobrenome,email) values('$nome','$sobrenome','$email')";

        if(mysqli_query($conexao,$query)){
            header("Location: ./index.php?sucesso");
        }else{
            header("Location: ./index.php?erro");
        }
    }
?>