<?php 
    include "./conexao.php";

    if(isset($_POST) && !empty($_POST)){
        $novo_nome = $_POST["nome"];
        $nova_senha = $_POST["senha"];
        $id = $_POST["id"];

        $query = "update usuarios set nome='$novo_nome',senha='$nova_senha' where id=$id";

        $res = mysqli_query($conn,$query);

        if($res){
            header("Location: ./inserindo_dado.php");
            exit();
        }
    }else if(isset($_GET) && !empty($_GET)){
        $query = "select * from usuarios";

        $resultado =  mysqli_query($conn,$query);

        if($resultado){
            $dados = mysqli_fetch_array($resultado);
            
            $id = $dados["id"];
            $nome = $dados["nome"];
            $senha = $dados["senha"];
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar</title>
</head>
<body>
    <form action="./editar.php" method="post">
        <label for="id">id</label>
        <input type="number" name="id" id="id" readonly value="<?php echo$id;?>">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo$nome;?>">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?php echo$senha?>">
        <input type="submit" value="Editar">
    </form>
</body>
</html>
<?php 

?>