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

    // array()
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

    // array_push()
    $carros = array();

    array_push($carros,"Amarok");
    array_push($carros,"Jeep");

    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    // array_pop()
    $carros = array("s10","uno-mile","ferrari","bugati");

    array_pop($carros);

    echo"<pre>";
    print_r($carros);
    echo"</pre>";

    // chave e valor
    $pessoa = array("nome:" => "Matheus", "altura" => 1.65, "solterio" => true);

    echo"<pre>";
    print_r($pessoa);
    echo"</pre>";

    // matriz

    $pessoa2 = array("nome"=>"Maria","altura"=>1.60,"solteiro"=>true);
    $pessoa3 = array("nome"=>"joão","altura"=>1.58,"solteiro"=>true);

    $lista_pessoas = array();

    array_push($lista_pessoas,$pessoa);
    array_push($lista_pessoas,$pessoa2);
    array_push($lista_pessoas,$pessoa3);

    echo"<pre>";
    print_r($lista_pessoas);
    echo"</pre>";

?>