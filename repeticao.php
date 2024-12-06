<?php
    // do while
    $i=0;
    
    echo "<h2> do While </h2>";

    do{
        echo "O valor de controle é: ".$i."<br>";
        $i++;
    }while($i<10);

    // While

    echo"<h2> While </h2>";

    while($i<20){
        echo "O valor de controle é: ".$i."<br>";
        $i++;
    }

    // For

    echo "<h2>For</h2>";

    for($i=0;$i<10;$i++){
        echo "O valor de controle é: ".$i."<br>";
    }
?>