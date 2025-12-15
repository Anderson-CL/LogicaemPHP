<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php 
    //Declarando uma nova classe
    class carro
    {
        //Atributos
        public $marca;
        public $modelo;
        public $ano;
        
        //Metodo (Função dentro da classe)
        public function exibirDetalhes()
        {
            echo "Marca: " . $this -> marca . "<br>";
            echo "Modelo: " . $this -> modelo . "<br>";
            echo "Ano: " . $this -> ano . "<br>";
        }

    }
    
    //Objeto (Instancia)
    $meuCarro = new carro();
    $meuCarro ->marca = "Fiat";
    $meuCarro ->modelo = "Uno Quadradão de cria";
    $meuCarro ->ano = 2009;

    //Chamar a função para exibir os detalhes do carro
    $meuCarro -> exibirDetalhes();


    //Instanciando novo carro dentro da classe
    $meuNovoCarro = new carro ();
    $meuNovoCarro -> marca = "Mitsubish";
    $meuNovoCarro -> modelo = "Lancer Todo mexidão do Braia";
    $meuNovoCarro -> ano = "2018";

    //Exibindo a função para o novo objeto
    $meuNovoCarro -> exibirDetalhes();

    class pessoa
    //Atributos (Propriedades)
    {
        public $nome;
        public $idade;
    

    //Método
    public function saudacao()
    {
        echo "Olá, meu nome é " . $this ->nome . " e tenho " . $this ->idade . " Anos. <br>";
    }

    }

    //Instanciando uma nova pessoa
    $mario = new pessoa ();
    $mario -> nome = "Mario";
    $mario -> idade = 30;

    //Exibe a saudção com os dados de Mario
    $mario ->saudacao();
    

    ?>
</body>
</html>