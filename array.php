<?php 
$arrayNome = array("Pedro", "Fernanda", "Lucas", "Marcos", "Joana");
echo $arrayNome[0];
?>

<?php

$arrayNome = array("Paulo", "Fernando", "Laura", "Marcio", "Jó");
for ($i = 0; $i < count($arrayNome); $i++) {
    echo $arrayNome[$i] . "<br />";
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
    <select name="slProfessores" id="slProfessores">
        <?php
     for ($i = 0; $i < count($arrayNome); $i++) {
        ?>
        <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
        <?php
    }
    ?>
    </select>
    <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
</body>
</html>

<?php
$arr = [];
for ($i = 0; $i <= 100; $i++) {
    $arr[] = $i;
}

for ($i = 0; $i <= 100; $i++) {
    echo "2 * {$i} = " . (2 * $arr[$i]) . "<br />";
}
?>