<?php
    // Escopo global

    $nome = "Matheus Seleghin Alexandre"; 

    $a = 10;
    $b = 15;
    $c = 3;

    function mostrarTexto(){
        global $nome;
        echo $nome;
    }

    mostrarTexto();

    function Exibecidade(){
        global $cidade;
        $cidade = "Rio de Janeiro";
        echo $cidade;
    }

    echo "<hr>";

    Exibecidade();

    echo "<hr>";

    echo $cidade;

    echo "<hr>";

    function soma(){
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    soma();
?>