<?php 
    // number_format() = formata números
    //round() = arrendonda 
    // ceil() = arrendonda dó pra cima
    // floor() = arrendonda para baixo
    // rand() = números aleatórios 
    $num = 1234.56;
    $preco = number_format($num,2,",",".");

    echo "O valor do produto é $preco";
    echo "<br>";

    echo round(3.6);
    echo "<br>";
    echo ceil(3.1);
    echo "<br>";
    echo floor(3.9);
    echo "<br>";
    echo rand(1,10);
?>