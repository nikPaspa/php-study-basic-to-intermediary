<?php
$jsonStr = '{"titulo":"titanic","sinopse":"Um navio colide com um ice berg e afunda","ano":"1997","horarios":["16:00","19:00","20:00"]}';

$arrFilme = json_decode($jsonStr);

echo "<p><b>Título: </b>". $arrFilme->titulo . "</p>";

echo "<p><b>Sinopse: </b>". $arrFilme->sinopse . "</p>";

echo "<p><b>Ano: </b>". $arrFilme->ano . "</p>";

echo "<p><b>Horários: </p></b>";


for($i = 0; $i < count($arrFilme->horarios); $i++){

echo "<p>----------------<b>". $arrFilme->horarios[$i]."</p></b>";
}