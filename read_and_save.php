<?php

function save(string $text, string $file) {
    $fp = fopen($file,"a+");
    fwrite($fp, "{$text} <br> \r\n");
    fclose($fp);
}

 save(date("d/m/Y H:i:s"), "file.txt");

 function read(string $file){
    $fp = fopen($file, "r");
    $text = fread($fp, filesize($file));
    fclose($fp);
    return $text;
 }

 echo read("file.txt");