<?php
/*
$arrFrutas = ["Abacaxi", "Banana", "Goiaba", "Maça", "Uva"];

foreach($arrFrutas as $v){
    echo $v . "<br >";
}


$arrFrutas = [
    1 => "Abacaxi", 
    2 => "Banana", 
    3 => "Goiaba", 
    4 => "Manga", 
    5 => "Uva"];


foreach($arrFrutas as $key => $v){
    echo "Key: {$key} => Value: {$v} <br >";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        foreach ($arrFrutas as $valor){
            ?>
            <li><?= $valor ?></li>
            <?php

        }
        ?>
    </ul>
</body>
</html>
*/

$arrNotas = [
    "aluno1" => [
        "nome" => "Nikolas",
        "nota" => 7
    ],
    "aluno1" => [
        "nome" => "Pedro",
        "nota" => 10
    ],
    "aluno3" => [
        "nome" => "José",
        "nota" => 0
    ],
    "aluno4" => [
        "nome" => "Eduardo",
        "nota" => 9
    ],
];

foreach ($arrNotas as $aluno) {
    foreach($aluno as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}

?>