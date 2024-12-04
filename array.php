<?php
    $carros = ["bmw","gol","saveiro","uno","palio"];
    echo "<pre>";
    print_r($carros);
    echo"</pre>";
    echo "<br>";
    echo "<h2>Carros:</h2>";
    echo "<ul>";

    for($i=0;$i<count($carros); $i++){
        echo "<li>".$carros[$i]."</li>";
    }

    echo"</ul>";
?>