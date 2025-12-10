<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php
    // condicional if - simples
    if(1 < 2){
        echo "O número 1 é menor. <br>";
    }
 
    $idade = 18;
 
    if($idade >= 18) {
        echo "Você é maior de idade. <br>";
    }
 
    // condicional else - composta
    $a = 10;
    $b = 14;
 
    if($a == $b){
        echo "As variáveis são iguais.";
    } else{
        echo "As variáveis são diferentes.";
    }
    echo "<br>";
 
    // condicional elseif
    $idadepessoa = 25;
    if($idadepessoa < 13){
        echo "Você é uma criança.";
    } elseif ($idadepessoa >= 20  && $idadepessoa <= 59) {
        echo "Você é um adulto.";
    }else {
        echo "Você é idoso.";
    }
    echo "<br>";
 
        // condicional switch
        $numero = 3;
 
        switch(true) {
            case($numero < 5):
            echo "O numero é menor que 5.";
            break;
            case($numero == 5):
            echo "O numero é igual a 5.";
            break;
            case($numero > 5):
            echo "O numero é maior que 5.";
            break;
            default:
            echo "Numero não identificado!";
            break;
        }
       
    echo "<br>";
       
        $animal = "gato";
 
    switch ($animal) {
        case "cachorro":
            echo "é um cachorro";
            break;
 
        case "peixe":
            echo "É um peixe";
            break;
       
        default:
            //  só executa se nenhum case anterior bateu
            echo "Animal não encontrado!";
            break;
    }
 
 
 
 
   
 
 
 
 
 
    ?>
</body>
</html>
 