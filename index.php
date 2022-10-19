<?php

    session_start(); 
    $tableau = array();
    //initialisation de la variable tableau
    
    $_SESSION['tableau']= $tableau;

    //var_dump($_SESSION['tableau']);
    
?>

<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TP - Formulaire</title>

</head>

<body>
    
    <h1>Voulez-vous remplir notre formulaire ?</h1>
    <form action="page1.php" method="get" id="formIndex">

        <input type="submit" value="Oui">

        <input type="submit" value="Non" id="boutonTroll">

        <span id="spanTroll">Haha</span>

    </form>


</body>

</html>