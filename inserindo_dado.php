<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <?php
        if(isset($_POST) && !empty($_POST)){
            if(empty($_POST["nome"]) || empty($_POST["senha"])){
                echo"<h1>Insira todos os campos</h1>";
            }else{
                $servidor = "localhost";
                $usuario = "root";
                $senha = "";
                $db_name = "aula";

                $conn = mysqli_connect($servidor,$usuario,$senha) or die ("Não foi possível conectar");
                mysqli_select_db($conn,$db_name);
                
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];
                $query = "insert into usuarios (nome,senha) values ('$nome','$senha')";

                $resultado = mysqli_query($conn,$query);

                if($resultado == 1){
                    echo"<h1>Registro inserido no banco de dados.</h1>";
                }else{
                    echo"<h1>Ocorreu algum erro.</h1>";
                }
            }
        }
    ?>
    <form action="./inserindo_dado.php" method="post">
        <input type="text" name="nome">
        <input type="password" name="senha">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>