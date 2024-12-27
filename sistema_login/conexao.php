<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "sistemadelogin";

    $conexao = mysqli_connect($server,$user,$password);

    mysqli_select_db($conexao,$db);
?>