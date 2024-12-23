<?php 
    if(isset($_POST) && !empty($_POST)){
        $mensagem;
        $quantidadeArquivos = count($_FILES['arquivos']['name']);
        $cont = 0;
        $formatosPermitidos = array("png","jpg","jpeg","gif");

        while($cont < $quantidadeArquivos){
            $extensao = pathinfo($_FILES['arquivos']['name'][$cont],PATHINFO_EXTENSION);

            if(in_array($extensao,$formatosPermitidos)){
                $pasta = "arquivo/";
                $temporario = $_FILES['arquivos']['tmp_name'][$cont];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($temporario,$pasta.$novoNome)){
                    $mensagem = "Upload feito com sucesso";
                }else{
                    $mensagem = "Erro! Não foi possível fazer o upload.";
                }
            }else{
                $mensagem = $_FILES['arquivos']['name'][$cont]." Formato inválido";
            }
            echo $mensagem."<br>";

            $cont++;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multiplo</title>
</head>
<body>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <label for="arquivos">Arquivos:</label><br>
        <input type="file" name="arquivos[]" multiple id="arquivos"><br>
        <input type="submit" value="submit" name="enviar" value="enviar"><br>
    </form>
</body>
</html>