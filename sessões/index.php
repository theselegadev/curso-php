<?php 
    // sessões no php
    session_start();
    $_SESSION['cor'] = 'verde';
    $_SESSION['carro'] = 'Veloster';

    echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>". session_id();
?>