<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # primeiro código
    echo "Olá Mundo";
    //Imprime a mensagem Ola mundo na tela 
    /* comentários em linha podem ser feitos com os símbolos # e //, já os comentários com mais de uma linha devem ser feitos com os sinais /* e */
    //phpinfo();

    // Variáveis PHP

    $texto ="<h1>Sou aluno da TI36 no Senac de Botucatu</h1>";
    echo $texto;

    $divisao ="<br>=========================================================<br>";
    echo $divisao;
    $nome ="Chaves";
    $sobrenome ="Del Ocho";
    echo "Ola, meu nome é $nome e meu sobrenome é $sobrenome.";

    /* EX. 1 - Crie um script PHP que declare três variáveis: $nome, $idade e $cidade. Atribua valores a essas variáveis e exiba uma mensagem que combine esse valores. */
    echo $divisao;

    $nome ="Maria do Carmo";
    $idade ="55";
    $cidade ="Bauru";

    echo "<br>$nome apresenta $idade anos de idade e mora na cidade de $cidade.<br>";
    echo $divisao; 
    /*
    operações Aritméticas no PHP:
        Soma:  +
        Subtração:  -
        Multiplicação:  *
        Divisão:  /
    */
    $numero1 = 56;
    $numero2 = 44;

    $soma = $numero1 + $numero2;
    echo "A soma entre $numero1 e $numero2 é $soma";
    echo $divisao;

    /* EX.2 - Crie um Script PHP que declare duas variaveis númericas, $num1 e num2. Realize as operações de soma, Subtração, Multiplicação e divisão entre variaveis e exiba os resultados. */
    $num1 = 10;
    $num2 = 5;
    $Soma = $num1 + $num2;
    $subtração = $num1 - $num2;
    $multiplicação = $num1 * $num2;
    $Divisao = $num1 / $num2;
    echo "A soma entre $num1 e $num2 é: $Soma";
    echo $divisao;
    echo "A subtração entre $num1 e $num2 é: $subtração";
    echo $divisao;
    echo "A multiplicação entre $num1 e $num2 é: $multiplicação";
    echo $divisao;
    echo "A Divisao entre $num1 e $num2 é: $Divisao";
    ?>
</body>
</html>