<?php
require_once("func.php");

try{
    OpenConection();
    echo "conectado com sucesso"
}catch(Exception $ex){
    echo "<b>Mensagem:</b>" . $ex-> getMessage(). "<br>";
    echo "<b>Linha:</b>" . $ex-> getLine(). "<br>";
    echo "<b>Arquivo:</b>" . $ex-> getFile(). "<br>";
}catch(PDOException $ex){
    echo "<b>Mensagem:</b>" . $ex-> getMessage(). "<br>";
    echo "<b>Linha:</b>" . $ex-> getLine(). "<br>";
    echo "<b>Arquivo:</b>" . $ex-> getFile(). "<br>";
}