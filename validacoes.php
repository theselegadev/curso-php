<?php 
    // Validações
    // funções filter_input() filter_var
    // FILTER_VALIDATE_INT
    // FILTER_VALIDATE _EMAIL
    // FILTER_VALIDATE_FLOAT
    // FILTER_VALIDATE_IP
    // FILTER_VALIDATE_URL

    $erros = array();

    // validações
    if(isset($_POST) && !empty($_POST)){
        if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){
            array_push($erros,"Idade inválida");
        }
        if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
            array_push($erros,"Email inválido");
        }
        if(!$peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)){
            array_push($erros,"Peso inválido");
        }
        if(!$ip = filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)){
            array_push($erros,"IP inválido");
        }
        if(!$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)){
            array_push($erros,"URL inválida");
        }
    }

    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro."<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validações</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="idade">Idade:</label><br>
        <input type="number" name="idade" id="idade"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="peso">Peso:</label><br>
        <input type="number" step="0.10" name="peso" id="peso"><br>
        <label for="ip">IP:</label><br>
        <input type="text" name="ip" id="ip"><br>
        <label for="url">URL:</label><br>
        <input type="text" name="url" id="url"><br>
        <input type="submit" value="enviar"><br>
    </form>
</body>
</html>