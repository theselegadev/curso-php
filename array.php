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

    echo"<br>";

    $carros = array();

    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    $carros = array("bmw","gol","saveiro","uno","palio");

    echo "<ul>";

    for($i=0;$i<count($carros);$i++){
        echo "<li>".$carros[$i]."</li>";
    }

    echo "</ul>";

    $carros = array();

    array_push($carros,"Amarok");
    array_push($carros,"Jeep");

    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    $carros = array("s10","uno-mile","ferrari","bugati");

    array_pop($carros);

    echo"<pre>";
    print_r($carros);
    echo"</pre>";
    


?>