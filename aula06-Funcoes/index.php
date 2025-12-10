<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    echo "<h2> Funções </h2>"; 

    function saudacao () // Criando a função
    {
        echo "Olá, boas-vindas ao PHP!";
    }
    
    saudacao(); //chamando a funlção
    
    echo "<br> <br>";
    function somar ($a, $b)
    {
        return $a + $b;
    }

    $resultado = somar (5,3); // Chamando a função passando os argumentos
    echo "Resultado da Soma: " . $resultado;

    echo"<br><br>";

    function saudacaoPersonalizada($nome = "Visitante")
    {
        echo "Olá, $nome! Boas-Vindas ao nosso site!";
    } 

    saudacaoPersonalizada(); //Chama sem argumento, usa o valor padrão
    echo"<br>";
    saudacaoPersonalizada("Carlos"); //Chamada com argumento

    echo "<br><br>";
    function encontrarMaiorValor($array)
    {
        return max ($array); // Função max() encontra o maior valor no array "min o minimo"
    }

    $valores = [2, 5, 9, 1, 3];
    echo "O maior valor é: " . encontrarMaiorValor($valores); 

    ?>
</body>
</html>