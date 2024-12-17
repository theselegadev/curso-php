<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuários</title>
</head>
<body>
    <?php
        include "./conexao.php";

        if(isset($_POST) && !empty($_POST)){
            if(empty($_POST["nome"]) || empty($_POST["senha"])){
                echo"<h1>Insira todos os campos</h1>";
            }else{
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
        <?php
            $query_consulta = "Select id,nome,senha from usuarios";
            $dados = mysqli_query($conn,$query_consulta);
            if($dados){
                ?>
                <table>
                        <thead>
                            <th>id</th>
                            <th>nome</th>
                            <th>senha</th>
                        </thead>
                    <?php
                while($linha = mysqli_fetch_assoc($dados)){
                    ?>        
                        <tbody>
                            <td><?php echo $linha["id"]?></td>
                            <td><?php echo $linha["nome"]?></td>
                            <td><?php echo $linha["senha"]?></td>
                            <td><a href="./excluir.php?id=<?php echo $linha["id"]?>"><button>excluir</button></a></td>
                            <td><a href="./editar.php?id=<?php echo $linha["id"]?>"><button>editar</button></a></td>
                        </tbody>
                </table>
                    <?php
                }
            }
        ?>
</body>
</html>