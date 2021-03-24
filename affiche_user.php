<?php

$db = new PDO('mysql:host=localhost;dbname=chat', 'theo', 'toto');
$resultats = $db->query('SELECT * FROM user');
$allUser = $resultats->fetchAll();

foreach ($allUser as $user) {

    $id = $user['id_user'];
    $tutu = $db->query('SELECT * FROM message WHERE _id_user = '.$id);
    $ligne_tutu=$tutu->rowCount();

    echo '<div class="un_user d-flex align-items-center pl-3 mt-3">';
    echo '<img src="img/pdp/'.$user['pdp_user'].'" class="rounded-circle user_img">';
    echo '<div class="mb-3">';
    echo '<p class="m-0 pl-3 user_name">'.$user['pseudo_user'].'</p>';
    echo '<span class="m-0 pl-3 total_msg">Message(s) envoyé(s) : '.$ligne_tutu.'</span>';
    echo '</div>';
    echo '</div>';
    echo '<hr style="width: 65%;">';

}