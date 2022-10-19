<?php

    session_start(); 
   
    //initialisation de la variable tableau

    $tab_session = $_SESSION['tableau'];
    //var_dump($_SESSION['tableau']);
    require('fonctions.php');
    
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
    
    <h1>Voici les données issues du formulaire :</h1>
    <?php

        //la fonction isset permet de vérifier que la variable existe
        if(isset($_GET['firstname']) && isset($_GET['lastname']) &&  isset($_GET['userMessage']) && isset($_GET['country']) && isset($_GET['sport_interest'])) {

            // Variables de la BDD
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "tpform_elkana";
            // Base de données créée en amont sur PhPMyAdmin

            // Variables du formulaire
            $n = $_GET['firstname'];
            $p = $_GET['lastname'];
            $um = $_GET['userMessage'];
            $c = $_GET['country'];
            if (!empty($_GET['sport_interest'])) {
                foreach($_GET['sport_interest'] as $value) {
                    if (isset($si)) {
                        $si = $si." / ".$value;   
                    } else {
                       $si = $value;
                    }
                }
            }
            $nouvelle_tab = creer_tableau($n,$p,$um,$c,$si);
            $_SESSION['tableau']=ajouter_element($tab_session,$nouvelle_tab);
            $tab_session=$_SESSION['tableau'];

            //Ouvrir une nouvelle connexion au serveur MySQL

            $mysqli = new mysqli($host, $username, $password, $database);
                    
            //Afficher toute erreur de connexion

            if ($mysqli->connect_error) {
                die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
            }  
        
            //préparer la requête d'insertion SQL

            $statement = $mysqli->prepare("INSERT INTO users_data (name, lname, message, country, sport) VALUES(?,?,?,?,?)"); 

            //Associer les valeurs et exécuter la requête d'insertion

            $statement->bind_param('sssss', $n, $p, $um, $c, $si); 
        
            if($statement->execute()){
                
            }else{
                print $mysqli->error; 
            }
        
        }
        
        afficher_tableau($tab_session);
   
    ?>
    <div id="formEnd">


        <form action="page3.php" method="get">
    
            <input type="submit" value="Vider les tableaux" id="flushTab">
    
        </form>
        <form action="page1.php" method="get">
        
            <input type="submit" value="Retour">
        
        </form>


    </div>


</body>

</html>
