<?php 
    // trabalhando com sessões no php arquivo index.php

    session_start();

    echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>". session_id();
?>