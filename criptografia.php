<?php 
    // criptografia/codificação

    $senha = "123456";

    // base64
    $novasenha = base64_encode($senha);
    echo "<h2>Base64:</h2><br>";
    echo "base64: ".$novasenha."<br>Senha: ".base64_decode($novasenha)."<br>";
    echo "<hr>";
    // md5
    echo "<h2>Md5:</h2><br>";
    echo "md5: ".md5($senha). "<br>Senha: ".$senha."<br>";
    echo "<hr>";
    // sha1
    echo "<h2>Sha1</h2><br>";
    echo "sha1: ".sha1($senha)."<br>Senha: ".$senha."<br>";
    echo "<hr>";
    echo "<h2>Hash:</h2>";

    $senhasegura = password_hash($senha,PASSWORD_DEFAULT);
    echo "hash: ".$senhasegura."<br>Senha: ".$senha."<br>";
?>