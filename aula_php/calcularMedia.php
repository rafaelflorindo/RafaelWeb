<?php

    //var_dump($_POST);//função que imprime vetor com os tipos dos campos

    $nomeAluno = $_POST["nomeAluno"];
    $notaPrimeiroBimestre = $_POST["notaBimestre1"];
    $notaSegundoBimestre = $_POST["notaBimestre2"];
    echo "Nome do aluno: $nomeAluno";
    echo "<br>";
    echo "Nota Primeiro Bimestre: $notaPrimeiroBimestre";
    echo "<br>";
    echo "Nota Segundo Bimestre: $notaSegundoBimestre";
    echo "<br>";
    $media = ($notaPrimeiroBimestre + $notaSegundoBimestre)/2;
    echo "Média = $media";