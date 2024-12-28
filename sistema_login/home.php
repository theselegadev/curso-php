<?php
    include "./conexao.php";
    session_start();

    if(empty($_SESSION['logado'])){
        header("Location: ./index.php");
    }

    $id = $_SESSION['id_usuario'];

    $query = "select * from usuarios where id = '$id'";

    $resultado = mysqli_query($conexao,$query);
    
    $dados = mysqli_fetch_array($resultado);

    echo "<h1>Olá ".$dados['nome']."</h1>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <a href="logout.php">Sair</a>
</body>
</html>