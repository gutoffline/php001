<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 001 de PHP</h1>
    <hr>
    <?php
    echo "<h2>Variável</h2>";
    $nome = "Guto Xavier";
    $idade = 38;
    $fumante = false;
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Fumante: ";
    //estrutura de decisão IF (SE)
    if($fumante == true){
        //verdadeiro
        echo "sim";
    }else{
        //falso
        echo "não";
    }
    ?>
</body>
</html>