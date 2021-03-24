<?php

$identifiant = $_POST['login'];
$motdepasse = md5($_POST['mdp']);
session_start();

$db = new PDO('mysql:host=localhost;dbname=chat', 'theo', 'toto');

$resultat = $db->query('SELECT * FROM user WHERE pseudo_user LIKE "'.$identifiant.'"');
$lignes_resultat=$resultat->rowCount();

if ($lignes_resultat>0) { // y a-t-il des résultats ?
    $ligne=$resultat->fetch(PDO::FETCH_ASSOC);

    if ($motdepasse == $ligne['mdp_user']) {

        echo '<div class="img_cont"><img src="img/pdp/'.$ligne['pdp_user'].'" class="rounded-circle user_img"><span class="online_icon"></span></div><div class="user_info"><p>Connecté en tant que :</p><span>'.$ligne['pseudo_user'].'</span></div>';
        $_SESSION = array(
            'user_id' => $ligne['id_user'],
            'user_nom' => $ligne['pseudo_user']
        );


    }   else {

        header("HTTP/1.1 500 Internal Server Error");
        echo 'Mot de passe erone'.$motdepasse;//html for 500 page

    }


}   else {
    header("HTTP/1.1 500 Internal Server Error");
    echo 'Utilisateur erone'.$identifiant;
}