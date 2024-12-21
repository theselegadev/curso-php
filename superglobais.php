<?php
    // $GLOBALS

    $num1 = 10;
    $num2 = 7;

    function soma(){
        echo $GLOBALS['num1'] + $GLOBALS['num2']."<br>";
    }

    soma();

    // $_SERVER

    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SCRIPT_FILENAME']."<br>";
    echo $_SERVER['SERVER_PORT']."<br>";
    echo $_SERVER['DOCUMENT_ROOT']."<br>";
    echo $_SERVER['REMOTE_ADDR']."<br>";
?>