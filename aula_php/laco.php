<?php
    /*
    FOR
    WHILE
    DO WHILE
    FOREACH
    */
    $numero = 10;
    echo "Número Inicial = $numero";
    echo "<br>";
    echo ">>>>> FOR <<<<<<";
    for($i = 10; $i < 10; $i++){
        echo "<br>Iteração: $i";
        $numero = $numero + $i;
        echo " - Numero atual = $numero";
    }
    /*echo "<hr>";//decremento
    for($i = 5; $i >= 0; $i = $i - 1){
        echo "<br>Iteração: $i";
        $numero = $numero + $i;
        echo " - Numero atual = $numero";
    }*/
    echo "<hr>";
    echo ">>>>> WHILE <<<<<<";
    $numero = 10;
    $i = 10;
    while($i < 10){
        echo "<br>Iteração: $i";
        $numero = $numero + $i;
        echo " - Numero atual = $numero";
        $i++;//$i = $i + 1
    }
    echo "<hr>";
    echo ">>>>> do WHILE <<<<<<";
    $numero = 10;
    $i = 0;
    do{
        echo "<br>Iteração: $i";
        $numero = $numero + $i;
        echo " - Numero atual = $numero";
        $i++;//$i = $i + 1
    }while($i < 10);