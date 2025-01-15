<?php
    // COOKIE  
    setcookie('user','Matheus Seleghin',time()+3600);
    setcookie('email','matheus@gmail.com',time()+3600);
    setcookie('ultima_pesquisa','tenis adidas', time()+3600);
    
    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";
    // cookies são arquivos criados no servidor e armazenados na máquina do usuário com informações
?>