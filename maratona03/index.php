<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona - 03</title>
</head>
<body>
    <h3>
    <?php
    echo "<h1> Exercícios com laço for: </h1>";
 
    echo "<h2>1. Crie um programa que imprima a tabuada de multiplicação do número 8 vezes 1 até 10: exemplo 8 x 1 = 8, 8 x 2 = 16...</h2>";
   
    for ($i = 1; $i <= 10; $i++)
    {
    echo "8 x $i = " . (8 * $i) . "<br>";
    }
   
    echo "<h2>2. Crie um p
    rograma que receba 10 números inteiros e calcule a média desses números. Utilize o laço for para ler os números e calcular a média.</h2>";
   
    $numeros = [10, 8, 7, 9, 6, 5, 10, 9, 8, 7];
    $soma = 0;
 
    for ($i = 0; $i < 10; $i++) {
      $soma = $soma + $numeros[$i];
    }
 
    $media = $soma / 10;
    echo "Numeros utilizados: ";
    foreach ($numeros as $numero)
    {
        echo $numero . ", ";
    } 

    
    echo "<br>";
 
    echo "Soma = $soma <br>";
    echo "Média = $media <br>";
   
    echo "<h1> Exercícios com foreach:</h1>";
    echo "<h2> 1. Crie um programa que tenha um array de nomes de 10 peças de carro e imprima todos os nomes em uma lista.</h2>";
   
    $pecas = ["Motor", "Freio", "Pneu", "Volante", "Farol", "Bateria", "Radiador", "Embreagem", "Suspensão", "Filtro de ar"];
 
    foreach ($pecas as $peca) {
        echo "- $peca <br>";
    }
       
    echo "<h2> 2. Crie um programa que tenha um array associativo com dados de um gato que chegou no petshop, como chave e seu valor. <br> Utilize o foreach para imprimir os nomes dos dados do gato.</h2>";
 
    $gato = [
    "Nome" => "Pretinho",
    "Idade" => 5,
    "Cor" => "Branco",
    "Peso" => "13kg",
    "Raça" => "ViraLata"
    ];
 
    foreach ($gato as $chave => $valor)
    {
        echo "$chave: $valor <br>";
    }
   
    echo "<h1> Exercícios com funções:</h1>";
    echo "<h2>1. Crie uma função que receba o valor de uma compra e calcule o desconto de 15%. A função deve retornar o valor com o desconto aplicado.</h2>";
 
    function calcularDesconto($valorCompra)
    {
    $desconto = $valorCompra * 0.15;
    return $valorCompra - $desconto;
    }
 
    echo "Valor com desconto: " . calcularDesconto(200);
 
    echo "<h2>2. Crie uma função que receba um número e determine se ele é primo ou não.</h2>";
 
    function ehPrimo($numero)
    {
        if ($numero <= 1)
            return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
 
    $teste = 4;
    echo $teste . (ehPrimo($teste) ? " é primo" : " não é primo");
 
   
   
    ?>
    </h3>
</body>
</html>