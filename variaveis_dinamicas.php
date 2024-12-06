<?php
    // Variaveis dinamicas são quando eu utilizando $$ na frente de uma variavel ja criada, assim passando o calor dela como nome

    $bebida = "refrigerante";
    $$bebida = "coca-cola";

    echo "<p>$refrigerante</p><br>";

    $lugar = "cidade";
    $$lugar = "Bauru-sp";

    echo "<p>$cidade</p><br>";

?>