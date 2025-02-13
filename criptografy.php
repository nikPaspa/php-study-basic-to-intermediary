<?php

/*
$s = sha1("Hello, World!");
echo $s;

echo "<br/>";

$m = md5("PHP inter");
echo $m;

echo "<br/>";


$b = base64_encode("criptografias");
echo $b;
echo "<br/>";
echo base64_decode($b);
*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criptografia</title>
    <style>
        ul{
            list-style-type: none;
        }
        input,select{
            padding:5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <ul>
            <li>User: <input type="text" name="txtUser" /></li>
            <li>Password: <input type="password" name="txtPassword2" /></li>
            <li><input type="submit" name="btnSubmit" Value="Sign in" />
                <a href="http://localhost/php-course/criptografy.php">Upgrade</a>        
        </li>
        </ul>
    </form>
    <br />
    <?php
    echo "User: " . filter_input(INPUT_POST, "txtUser", FILTER_SANITIZE_STRING);
    echo "<br />";
    echo "Password: " . md5(filter_input(INPUT_POST, "txtPassword2", FILTER_SANITIZE_STRING));
    ?>
    
</body>
</html>
