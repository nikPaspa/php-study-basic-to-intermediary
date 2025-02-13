<?php
$str = '{"bairro":"Setor Institucional","cep":"76872862","cidade":"Ariquemes","estado":"RO","logradouro":"Rio Madeira ","tipodelogradouro":"Rua"}';

$arrCidade = json_decode($str);


if($arrCidade!= null){
    echo "<p><b>CEP: </b>". $arrCidade->cep ."</p>";
    echo "<p><b>Tipo de Logradouro: </b>". $arrCidade->tipodelogradouro ."</p>";
    echo "<p><b>Logradouro: </b>". $arrCidade->logradouro ."</p>";
    echo "<p><b>Bairro: </b>". $arrCidade->bairro ."</p>";
    echo "<p><b>Cidade: </b>". $arrCidade->cidade ."</p>";
    echo "<p><b>Estado: </b>". $arrCidade->estado ."</p>";

}