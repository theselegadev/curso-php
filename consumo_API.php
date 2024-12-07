<?php
    // Função file_get_contents() pega todo o conteudo de um página

    if(isset($_GET["cep"]) && !empty($_GET["cep"])){
        $dados = file_get_contents("https://viacep.com.br/ws/".$_GET["cep"]."/json/");
        $dados = json_decode($dados,true);
        echo"<pre>";
        print_r($dados);
        echo"</pre>";
    }

    // $_GET é um array de chave e valor de escopo global que armazena os dados enviados por um formulário pelo método get

    // função json_decode() transforma um json em um array
?>
<form action="./consumo_API.php" method="get">
    <label for="cep">Digite um cep</label>
    <input type="text" name="cep">
    <input type="submit" value="Enviar">
</form>