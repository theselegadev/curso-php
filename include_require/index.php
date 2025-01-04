<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e require</title>
</head>
<body>
    <!-- a diferença entre o include e o require é que se o require não encontrar o arquivo ele da um erro fatal e não termina o script, o include ele apenas da um aviso e continua  executando o script -->
    <?php include "./header.php"; ?>
    <?php include_once "./header.php"; ?>
    <?php echo"<h1>Hello world!</h1>";?>
    <?php require "./footer.php";?>
    <?php require_once "./footer.php";?>
    <!-- o include_once e o require_once verifica se o arquivo já foi incluido e se já ele não faz a inclusão -->
</body>
</html>