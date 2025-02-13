<?php

#for(initialization; condition; increment / decrement;)


//for($i=1; $i<=10; $i++){
//   echo "Number : $i<br>";
//}

/*
$i = 1;

while($i<=10){
    echo $i."<br>";

    $i++;
}

*/

$fruits = array("Apple", "Mango", "Banana", "Orange");

foreach($fruits as $fruit){
    echo "Fruit name is $fruit <br/>";
}

?>