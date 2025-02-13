<?php

$name = $_POST['studentName'];
$age = $_POST['studentAge'];
$email = $_POST['studentEmail'];
$address = $_POST['studentAddress'];

echo $name.'<br/>'.$age.'<br/>'.$email.'<br/>'.$address;

?>


<form method="POST">
    Name: <input type="text" name="studentName" /><br /><br />
    Age: <input type="number" name="studentAge" /><br /><br />
    Email: <input type="email" name="studentEmail" /><br /><br />
    Address: <textarea name="studentAddress"></textarea><br /><br />
    <input type="submit" name="submit" value="Register" />
</form>