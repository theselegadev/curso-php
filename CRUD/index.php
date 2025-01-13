<?php 
    include_once "./conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobre nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "select * from clientes";

                $resultado = mysqli_query($conexao,$query);

                
                while($dados = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <td><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['sobrenome'];?></td>
                    <td><?php echo $dados['email']?></td>
                    <td><a href="./update.php?id=<?php echo $dados['id'];?>">Editar</a></td>
                    <td><a href="#">Remover</a></td>
                </tr>
                <?php }?>
        </tbody>
    </table>
    <a href="./adicionar.php">Adicionar cliente</a>
</body>
</html>