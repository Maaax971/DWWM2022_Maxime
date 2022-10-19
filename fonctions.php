<?php 

function creer_tableau($n, $p, $um, $c, $si) {
    
    $t1 = array(
        array("firstname"=> $n,"lastname"=>$p,"userMessage"=>$um, "country" => $c, "sport_interest" => $si )   
    );
    return $t1;
}



function afficher_tableau($var) {

    foreach($var as $nb => $infos){
        echo ' <br> Utilisateur n°' .($nb + 1). ' :<br>';

        foreach ($infos as $d => $v){
            echo $d. ' : ' .$v. '<br>';
        }

        echo '<br>';
    }

    return $var;
}

function ajouter_element($tableau_initial,$nouveau_tableau) {

    $fusion = array_merge($tableau_initial,$nouveau_tableau);
    return $fusion;

}
