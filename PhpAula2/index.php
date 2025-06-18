<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <?php
    $traco = "<br>====================================<br>";
    /* EX.3 - Crie um script PHP que declare duas variáveis de string, $primeiroNome e $segundoNome. Concatene essas variáveis para formar o nome completo e exiba o resultado.*/ 
echo $traco;
$primeiroNome ="Maria";
$segundoNome ="do Bairro";
$nomeCompleto = $primeiroNome."&nbsp;".$segundoNome;     /*&nbsp - Espaço em branco */
echo "Nome completo: $nomeCompleto";

echo $traco;
/* =========VARIÁVEIS DE ATRIBUIÇÃO==============*/ 
    $num1 = 7252;
    $num2 = 98;
    echo " A soma entre ele é:" .$num1 += $num2;
    echo "<br>";
    $num1 =7252;
    echo "A subtração entre os números é:" .$num1 -= $num2;
    echo "<br>";
    $num1 = 7252;
    echo "A multiplicação entre os números é:" .$num1 *= $num2;
    $num2;
    echo "<br>";
    $num1 = 7252;
    echo " A divisão entre os números é:" .$num1 /= $num2;
    echo "<br>";
    echo $traco;

    echo "Exemplos de incrementos e decrementos<br>";
    $numero = 10;
    echo "Valor da variável: $numero<br>";
    $numero++;
    echo "Valor da variável após o incremento: $numero<br>";
    $numero--;
    echo "Valor da variável após o decremento: $numero<br>";
    echo $traco;
    echo "Exemplo de troca de valores com variáveis<br>";
    $a =10;
    $b =20;

    echo "Valores originais: a = $a, b = $b <br>";
    $a += $b; /* $a = $a + $b */
    $b = $a - $b; 
    $a -= $b; /* $a = $a - $b */

    echo "Valores trocados: a = $a, b = $b<br>";
    echo $traco;
    echo "Exemplo de resto da divisão<br>;";
    $divisor =20;
    $quociente =2;
    $resto = $divisor % $quociente;
    echo "O resto da divisão de $divisor por $quociente é: $resto";
    echo $traco;

    echo "Exemplo de operador de potencialização<br>";
    $base =2;
    $exepoente =3;
    $potencia = $base ** $expoente;
    echo "$base elevado a $potencia";
    echo $traco;


    ?>
</body>
</html>