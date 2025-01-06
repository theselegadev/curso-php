<?php 
    include "./conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP PROCEDURAL</title>
</head>
<body>
    <form action="./create.php" method="post">
        <label for="nome">nome:</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="sobrenome">Sobre Nome:</label><br>
        <input type="text" name="sobrenome" id="sobrenome"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <input type="submit" value="Enviar"><br>
        <a href="./index.php">Lista de clientes</a>
    </form>
</body>
</html>