<?php
    include_once "./conexao.php";

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from clientes where id = '$id'";

        $resultado = mysqli_query($conexao,$query);

        $dados = mysqli_fetch_array($resultado);
    }else{
        header("Location: ./index.php");
    }

    if(isset($_POST) && !empty($_POST)){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];

        $query = "update clientes set nome='$nome', sobrenome='$sobrenome',email='$email' where id = $id";

        $resultado = mysqli_query($conexao,$query);

        if($resultado){
            header("Location: ./index.php?editar=sucesso");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="id">Id:</label><br>
        <input type="number" name="id" id="id" value="<?php echo $id ?>"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>"><br>
        <label for="sobrenome">Sobrenome:</label><br>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" value="<?php echo $dados['email']?>"><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>