<?php 
    include "./conexao.php";
    session_start();

    if(isset($_POST) && !empty($_POST)){
        $erros = array();
        if(empty($_POST['login']) or empty($_POST['senha'])){
            array_push($erros,"<li>Preencha todos os campos</li>");
        }else{
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $query = "select * from usuarios where login = '$login'";
            $resultado = mysqli_query($conexao,$query);

            if(mysqli_num_rows($resultado)>0){
                $query = "select * from usuarios where login = '$login' and senha = '$senha'";
                $resultado = mysqli_query($conexao,$query);

                if(mysqli_num_rows($resultado) > 0){
                    $dados = mysqli_fetch_array($resultado);

                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    
                    header("Location: ./home.php");
                }else{
                    array_push($erros,"<li>Senha incorreta</li>");
                }
            }else{
                array_push($erros,"<li>Usuário inexistente</li>");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
        if(!empty($erros)){
            foreach($erros as $erro){
                echo $erro;
            }
        }
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <label for="login">Login:</label><br>
        <input type="text" name="login" id="login"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="enviar"><br>
        <input type="reset" value="limpar"><br>
    </form>
</body>
</html>