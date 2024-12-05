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
        quebrar_linha();
    }

    imprimir_texto("Hello world");

    function soma($n1,$n2){
        return $n1 + $n2;
    }

    $adicao = soma(10,10);

    imprimir_texto($adicao)
?>