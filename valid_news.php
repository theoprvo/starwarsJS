<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

if (isset($_POST)) {
    if (empty($prenom)) {

        $erreur['prenom'] = 'Veuillez mettre un prenom';

    }
    if (empty($nom)) {

        $erreur['nom'] = 'Veuillez mettre un nom';

    }
    if (empty($email)) {

        $erreur['email'] = 'Veuillez mettre une adresse mail';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $erreur['email'] = 'Veuillez renseigner une adresse mail valide';

    }

    if (isset($erreur)) {

        echo json_encode($erreur);

    } else {

        echo json_encode(true);

    }
}