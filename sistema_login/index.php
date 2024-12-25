<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="enviar"><br>
        <input type="reset" value="limpar"><br>
    </form>
</body>
</html>