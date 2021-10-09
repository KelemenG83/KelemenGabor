<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1> Üdvözöllek!</h1>
 <form action="index.php" method="GET">
     <input type="number" name="number1" ><br>
     <input type="submit" value="Elküld">
</form>
</body>
</html>


<?php

$ho=$_GET['number1'];

if($ho<=0){
        echo("Szilárd.");
    }
    else  if ($ho<100)    {
        echo("Folyékony.");
    }
    else {
    echo("Légnemű.");
    }


/*
$nev="Kelemen Gábor";
echo("Üdvözöllek:  $nev Legyen szép napod!");*/

?>