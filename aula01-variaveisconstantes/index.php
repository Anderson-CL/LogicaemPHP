<!-- Codigo para cabeça de html, inicio de tudo. -->

<!DOCTYPE html>
<html lang="pt-br"> <!-- linguagem -->
<head>
    <meta charset="UTF-8"> <!-- padrão de codigo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- largura para exibir na tela -->
    <title>Meu Primeiro PHP</title>  <!-- Titulos -->
</head>

<body>
    <h2>
    <?php // inicio do programa em PHP
        echo "Meu Primeiro PHP \u{1F480}"; // "\u" pode adicionar emoji (site emojipedia)

        echo "<br>"; // 1 echo quebra linha 2 pula linha

        //Váriaveis
        $nome= "Anderson";
        $sobrenome = "Santos";

        // A variavel pode ser mudada
        $nome = "Anderson Pereira";
        echo "Seja bem-vindo $nome $sobrenome";

        echo "<br> <br>"; //echo pula linha

        const time = "Vitoria";
        echo "Meu time de futebol é " .time;

        echo "<br> <br>";

        echo "Seja bem vindo, $nome $sobrenome seu time é " .time;

        echo "<br> <br>";

        //Tipos de dados
        $sobrenome2 = "Uiuton"; //string
        $idade = 93; //int
        $peso = 30.5; //float double
        $casado = false; //boolean

        echo "$sobrenome2 $idade $peso";
        echo "<br> <br>";

        //Método 1: Usando var_dump para exibir o valor do booleano
        var_dump ($casado);
        echo "<br> <br>";

        //Método 2: Usando uma conversão para string
        echo($casado ? "Casado" : "Não é casado");
        echo "<br> <br>";

        //tipos primitivos
        var_dump ($sobrenome2);
        echo "<br>"; 
        var_dump ($idade);
        echo "<br>";
        var_dump ($peso);
        echo "<br> <br>";

        //constante e variável dentro de outra variavel
        $frase = "Meu time de futebol é " .time;
        $frase2 = "Meu nome é $nome meu sobrenome é $sobrenome";
        echo($frase);
        echo "<br>";
        echo($frase2);

    ?>    
    </h2> <!-- para finalizar a programação em php -->
    <p>Meu Primeiro Paragrafo</p>

</body>
</html> 