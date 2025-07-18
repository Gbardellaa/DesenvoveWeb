<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
</head>
<body>
    <?php
    $traco = "<br>====================================<br>";
    echo "<h2>Conversor de moedas</h2>";
    $dolar = 10;
    $real = 5.54;
    echo "A conversão de $dolar dolar para real é: ".$dolar *= $real;
    echo $traco
    ?>
    <h2>Número Par ou Impar</h2>
    <?php
    $divisor =5;
    $quociente =10;
    $resto =$divisor % $quociente;
    if ($resto == 0)
    {
        echo "O número $divisor é par<br>";
    } else {
        echo "O número $divisor é ímpar<br>";
    }
    echo $traco
    ?>
    <h2>Gerador de Números aleatórios usando função rand()</h2>
    <?php
    echo"<br>".rand(0,100);
    echo $traco;
    ?>
    <h2>Variável para armazenar nome e idade</h2>
    <?php
    $nome ="Gislaine";
    $idade ="23";
    echo "Meu nome é $nome e tenho $idade anos.";
    echo $traco
    ?>
    <h2>Faça um programa que receba dois números como entrada e retorne a soma deles</h2>
    <?php
    $num1 = 25;
    $num2 = 955;
    echo "A soma entre $num1 e $num2 é: ". $num1 += $num2;
    echo "<br>";
    echo $traco;
    ?>
    <h2>Escreva uma função que receba uma temperatura em Celsius e a converta para Fahrenheit</h2>
    <?php 
    $celsius=25;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo $fahrenheit;
    echo $traco
    ?>
    <h2>Implemente uma função que verifique se a palavra é um palíndromo</h2>
    <?php
    $palavra = "ovo";
    $invertida = strrev($palavra);
    if ($palavra == $invertida) {
        echo "'$palavra' é um palíndromo.";
    } else {
        echo "'$palavra' não é um palíndromo.";
    }
    ?>
    <h2> Crie uma função que verifique se o número é primo, intervalo de 0 a 100</h2>
    <?php
    $numero = 3;
    $divisores = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "$numero é primo.";
    } else {
        echo "$numero não é primo.";
    }
    echo $traco;
    ?>

</body>
</html>