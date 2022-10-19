<?php

    //phpinfo();
    session_start(); 
    // $tableau = array();
    //var_dump($_SESSION['tableau']);
    $tab_session = $_SESSION['tableau'];
    require('fonctions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>

</head>

<body>
    
    <h1>Veuillez remplir tous les champs du formulaire</h1>

    <form action="page2.php" method="get" id="formPage1">

        <div id="namesDiv">
            <div>
                <label for="">Votre Nom</label>
                <input type="text" name="firstname" id="fname" required>
            </div>
            <div>
                <label for="">Votre Prénom</label>
                <input type="text" name="lastname" id="lname" required>
            </div>
        </div>
        <textarea name="userMessage" id="user_message" cols="30" rows="10" required placeholder="Veuillez renseigner votre profession ici"></textarea>
        <div id="countryDiv">
            <select name="country" id="user_coutry" required>
                <option value="defaut">Choisissez votre pays</option>
                <option value="france">France</option>
                <option value="england">Angleterre</option>
                <option value="italy">Italie</option>
                <option value="usa">Etats-Unis</option>
                <option value="mexique">Mexique</option>
                <option value="australia">Australie</option>
            </select>
        </div>
        <div id="sportDiv">
            <label for="">Quel sport préférez-vous ? (plusieurs choix possible)</label>
            <div class="checkboxDiv">
                <input type="checkbox" name='sport_interest[]' id="football" value="Football">
                <label for="foot">Football</label>
            </div>
            <div class="checkboxDiv">
                <input type="checkbox" name='sport_interest[]' id="tennis" value="Tennis">
                <label for="foot">Tennis</label>
            </div>
            <div class="checkboxDiv">
                <input type="checkbox" name='sport_interest[]' id="volley" value="Volley-Ball">
                <label for="foot">Volley-Ball</label>
            </div>
            <div>
                <input type="checkbox" name='sport_interest[]' id="esport" value="E-Sport">
                <label for="foot">E-Sport</label>
            </div>

        </div>
        <input type="submit" value="Soumettre" id="boutonEnvoi">
    </form>

</body>

</html>