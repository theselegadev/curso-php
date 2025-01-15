<?php
    // Datas

    // Dia em número
    echo date('d');

    echo "<br>";

    // Dia da semana com 3 digitos
    echo date('D');

    echo "<br>";

    // Dia da semana completo

    echo date('l');

    echo "<br>";
    
    // Mês em número
    echo date('m');

    echo "<br>";

    // Mês em texto
    echo date('M');

    echo "<br>";

    // Ano com dois digitos
    echo date('y');

    echo "<br>";

    // Ano com todos os digitos
    echo date('Y');

    echo "<br>";

    // Hora
    date_default_timezone_set('America/Sao_Paulo');
    echo date('H');

    echo "<br>";

    // Minutos
    echo date('i');
    
    echo "<br>";

    // Segundos

    echo date('s');
    echo "<br>";

    // Conjunto
    echo date('d/m/Y');
    
    echo "<br>";

    // time()

    echo time();

    echo "<br>";

    // mktime

    $data_pagamento = mktime(15,30,00,02,15,2026);
    echo date('d/m/Y - h:i', $data_pagamento);

    echo "<br>";
    
    // strtotime

    $data = '2023-03-10';
    $data = strtotime($data);

    echo date('d/m/Y',$data);

    echo "<br>";
?>