<?php 
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        include "conexao.php";

        $query = "delete from usuarios where id=".$_GET["id"];
        $resultado = mysqli_query($conn,$query);

        if($resultado){
            header("Location: ./inserindo_dado.php?mensagem=Excluido com sucesso");
            exit();
        }
    }
?>