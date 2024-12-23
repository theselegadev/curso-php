<?php 
    // upload de arquivos 

    if(isset($_POST['enviar'])){
        $formatos_permitidos = array("png","jpg","jpeg","gif");
        $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
        $mensagem;

        if(in_array($extensao,$formatos_permitidos)){
            $pasta = "arquivo/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario,$pasta.$novoNome)){
                $mensagem = "Upload feito com sucesso!";
            }else{
                $mensagem = "Erro, não foi possível fazer o upload";
            }
        }else{
            $mensagem = "Formato inválido!";
        }
        echo $mensagem;
    }
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <label for="upload">Upload:</label><br>
        <input type="file" name="arquivo"><br>
        <input type="submit" value="Enviar" name="enviar"><br>
    </form>
</body>
</html>