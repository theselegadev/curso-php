<?php
    // funções nativas
    // count();
    // rand(-150);
    // echo "";
    // print_r();
    // array();

    function quebrar_linha(){
        echo "<br>";
    }

    function imprimir_texto($texto){
        echo $texto;
    }

    imprimir_texto("Hello world");

    quebrar_linha();

    function soma($n1,$n2){
        echo $n1 + $n2;
    }

    soma(10,10);

    quebrar_linha();
?>