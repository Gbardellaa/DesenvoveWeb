<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <?php
    $traco = "<br>====================================<br>";
    echo "<h2>Operadores de Comparação</h2>";
    //Operadores de comparação
    /* ==Igual,
    != Diferente,
    === Identico,
    !== Não identico,
    > Maior que,
    < Menor que,
    >= Maior ou igual,
    <= Menor ou igual */
    $x =5;
    $y =0;
    echo "<strong>==Igual </strong><br>";
    var_dump($x == $y);
    echo "<br> != Diferente<br>";
    var_dump($x != $y);
    echo "<br><strong>===Identico</strong><br>";
    var_dump($x === $y);
    echo "<br><strong>!== Não Identico</strong><br>";
    var_dump($x !== $y);
    echo "<br><strong>> Maior que</strong><br>";
    var_dump($X > $Y);
    echo "<br><strong>< Menor que</strong><br>";
    var_dump($x < $y);
    echo "<br><strong>>= Maior ou igual</strong><br>";
    var_dump($x >= $y);
    echo "<br><strong><= Menor ou igual</strong><br>";
    var_dump($x <= $y);
    echo $traco;
    echo "<h2>Inserir Caracteres Unicode</h2>";

    echo "\u{1F47E}";
    echo "<br>";
    echo '\u{1F47E}';
    echo $traco;
    echo "<h2>Operadores Logicos </h2>";
    echo "<p><strong>|| (OU) </strong></p><br>";
    $a = true;
    $b = false;
    var_dump($a || $b);
    //Exemplo 
    $numero1 =5;
    $numero2 =10;
        if (($numero1 >5) && ($numero2 < 11))
        {
            echo " ";
        } else {
            echo "<br><br> Uma das duas condições é falsa";
        }
        echo $traco;
        echo "<h2>Operadores de Atribuição</h2>";
        echo "<strong> +=, -=, *=, /=, %=</strong>";
        echo "<br>".$numero1 += $numero2; //$numero1 = $numero1 + $numero2 
        $numero1 =5;
        $numero2 =10;
        echo "<br>".$numero1 -= $numero2; //$numero1 = $numero1 - $numero2 
        $numero1 =5;
        $numero2 =10;
        echo "<br>".$numero1 *= $numero2; //$numero1 = $numero1 * $numero2 
        $numero1 =5;
        $numero2 =10;
        echo "<br>".$numero1 /= $numero2; //$numero1 = $numero1 / $numero2 
        $numero1 =5;
        $numero2 =10;
        echo "<br>".$numero1 %= $numero2; //$numero1 = $numero1 % $numero2 
        echo $traco;
        echo "<h2>Função para gerar números aleatórios</h2>";
        echo "<br>".rand(1,6);
        echo "<br>".rand();
        echo $traco; 
        echo "<h2>Outras funções em PHP</h2>";
        echo "<P><strong>abs()</strong> - Valor absoluto </p>";
        $numero1 =5;
        $numero2 =10;
        echo abs($numero1 -= $numero2); //$numero1 = $numero1 - $numero2;
        echo "<p><strong>base_convert()</strong> - Conversor de base</p>";
        $binario ="1010";
        echo $decimal = base_convert($binario, 2, 10);
    ?>
</body>
</html>