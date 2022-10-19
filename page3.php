<?php
    session_start();
    session_destroy();
    session_start();
    $tableau = array();
    $_SESSION['tableau']= $tableau;
    $tab_session = $_SESSION['tableau'];
    require('fonctions.php');
    
    // Permet d'effacer les valeurs des variables et réamorce une session et redéfini le tableau vide.
    // redéfinir les variables et les variables globales efface les données précédemment obtenues et permet d'en récupérer de nouvelles
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
    
    <h1>Vous avez choisi de supprimer les données du formulaire</h1>

    <?php 

        // $host = "localhost";
        // $username = "root";
        // $password = "";
        // $database = "tpform_elkana";
        
        //Ouvrir une nouvelle connexion au serveur MySQL

        // $mysqli = new mysqli($host, $username, $password, $database);
        // if ($mysqli->connect_error) {
        //     die("La connexion a échoué : " . $mysqli->connect_error);
        // }

        // $delete_request = "DELETE FROM users_data";

        // mysqli_query($mysqli , $delete_request);

        // De la ligne 42 à 49 :  on se connecte, on verifie la connexion, on stock notre requete SQL de suppression et on lance la requête SQL sur notre BDD

        // Commentaires (lignes 35 - 50) à décommenter (sauf ligne 40) si l'on souhaite supprimer les élements de la BDD également


    ?>
    
    <div id="formEnd">

        <form action="page1.php" method="get">
        
            <input type="submit" value="Retour">
        
        </form>


    </div>


</body>

</html>