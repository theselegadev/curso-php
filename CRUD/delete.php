<?php
    include_once "./conexao.php";

    if(isset($_GET) && !empty($_GET)){
        $id = $_GET['id'];
        $query = "delete from clientes where id =$id";
        $resultado = mysqli_query($conexao,$query);

        if($resultado){
            header("Location: ./index.php");
        }
    }else{
        header("Location: ./index.php");
    }
?>