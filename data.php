<?php

date_default_timezone_set('America/Sao_Paulo');
/*
echo date("d/m/Y") . "<br>";
echo date("h:i:s") . "<br>";
*/

$hora = date("h");


if($hora > 0 && $hora <= 5) {
    echo "Boa madrugada";
}elseif($hora > 5 && $hora <= 12) {
    echo "Bom dia";
}elseif($hora > 12 && $hora <= 18) {
    echo "Boa tarde";
}else {
    echo "Boa noite"; 
}

?>