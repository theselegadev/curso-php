<?php 
    // Constantes
    define("NOME","matheus");
    define("IDADE",17);
    define("ALTURA",1.70);

    echo "Meu nome é ".NOME." tenho ".IDADE." anos de idade e ".ALTURA." de altura";

    define("TIMES",['vasco','corinthians','palmeiras','botafogo','noroeste']);

    echo"<pre>";
    print_r(TIMES);
    echo"</pre>";

    // constantes naturalmente são globais

    function exibirNome(){
        echo NOME;
    }

    exibirNome();
?>