<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
</head>
<body>
    <a href="javascript: history.go(-1)">Voltar</a> | <a href="index.php">Home</a>
    <?php
    var_dump($_GET);
    echo "Seja Bem-Vindo! <strong>".$_GET ["nome"]."</strong><br>0 e e-mail digitado foi: ".$_GET["email"];
    ?>
</body>
</html>