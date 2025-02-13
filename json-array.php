<?php
$arrayFilme = array (
    "titulo" => "titanic",
    "sinopse" => "Um navio colide com um ice berg e afunda",
    "ano" => "1997",
    "horarios" => array(
        "16:00",
        "19:00,",
        "20:00"
    )       
);


$jsonStr = json_encode($arrayFilme);
echo $jsonStr;