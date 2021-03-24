<?php
session_start();
$login_new = $_POST['login_new'];
$mdp_new = $_POST['mdp_new'];
$pdp_new = $_POST['select'];

$db = new PDO('mysql:host=localhost;dbname=chat', 'theo', 'toto');

if (empty($login_new) == true) {

    echo 'Veuillez rentrer un nom d\'utilisateur';

}   else {

    if (empty($mdp_new) == true) {

        echo 'Veuillez rentrer un mot de passe';

    }   else {

        if (empty($pdp_new) == true) {

            echo 'Veuillez selectionnez une photo de profil';

        }   else {

            $ttt='INSERT INTO user (pseudo_user, mdp_user, pdp_user) VALUES ("'.$login_new.'", md5("'.$mdp_new.'"), "'.$pdp_new.'")';
            $resultat = $db->query($ttt);


            $resultat = $db->query('SELECT * FROM user WHERE pseudo_user LIKE "'.$login_new.'"');
            $ligne=$resultat->fetch(PDO::FETCH_ASSOC);

            echo '<div class="img_cont"><img src="img/pdp/'.$ligne['pdp_user'].'" class="rounded-circle user_img"><span class="online_icon"></span></div><div class="user_info"><p>Connecté en tant que :</p><span>'.$ligne['pseudo_user'].'</span></div>';
            $_SESSION = array(
                'user_id' => $ligne['id_user'],
                'user_nom' => $ligne['pseudo_user']
            );
        }

    }

}