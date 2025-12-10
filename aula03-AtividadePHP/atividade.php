<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade01</title>
</head>
<body>
    <?php

    
   echo "<h1> Saudação com nome </h1>";

    $nome = "Jucicleidson";
    const saudacao = "Bem vindo ao nosso site!";

    echo "Olá, $nome ! Bem vindo ao nosso site! <br><br>";

    echo "Olá $nome ! " .saudacao;

    echo "<h1> Conversão de Temperatura </h1>";

    $Celsius = 31;
    const conversor1 = 9 / 5;
    $Conversor2 = 32 ;
    
    $Farerai = ($Celsius * conversor1)  + $Conversor2; 

    echo $Farerai;

    echo "<h1> Empréstimo Bancário </h1>";

    $cash = 1000;
    $juros = 1.5;
    $parcelas = 20;

    $vlparc = ($cash * (1 +$juros)) / ($parcelas);

    echo "Valor do Emprestimo: $cash <br>";

    echo "taxa de juros: $juros <br>";

    echo " Valor da Parcela: $vlparc <br>";


    ?>
</body>
</html>