<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db_name = "aula";
    $conn = mysqli_connect($servidor,$usuario,$senha) or die ("Não foi possível conectar");
    mysqli_select_db($conn,$db_name);
?>