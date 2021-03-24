<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=chat', 'theo', 'toto');

$resultats = $db->query('SELECT * FROM user INNER JOIN message ON user.id_user = message._id_user ORDER BY id_msg');
$allMesssage = $resultats->fetchAll();

?>

<div class="card-body msg_card_body">

    <?php

    for ($i = 0; $i < count($allMesssage); $i++) {

        $user = $allMesssage[$i];

        //ON TEST SI IL YA UN UTILISTAEUR SUIVANT
        if (($i + 1) < count($allMesssage)) {
            $user_next = $allMesssage[$i + 1]['id_user'];
        } else {
            $user_next = -1;
        }

        //MESSAGE ENVOYE
        if ($user['id_user'] == $_SESSION['user_id']) {

            //EST CE QUE LE MESSAGE SUIVANT EST DIFFERENT ?
            if ($user['id_user'] != $user_next) {
                $margin = 'mb_msg';
                $date = '<span class="tooltiptext">' . $user['date_msg'] . '</span >';
                $avatar = '<div class="img_cont_msg"><img src="img/pdp/' . $user['pdp_user'] . '" class="rounded-circle user_img_msg"></div>';
            } else {
                $margin = 'mb_msg_suite';
                $date = '<span class="tooltiptext">' . $user['date_msg'] . '</span >';
                $avatar = '<div class="img_cont_msg" style="opacity: 0;"><img src="img/pdp/' . $user['pdp_user'] . '" class="rounded-circle user_img_msg"></div>';
            }

            echo '<div class="d-flex justify-content-end ' . $margin . '">';
            echo '<div class="msg_cotainer_send">' . $user['texte_msg'];
            echo $date;
            echo '</div>';
            echo $avatar;
            echo '</div>';

        } //MESSAGE RECU
        else {

            //EST CE QUE LE MESSAGE SUIVANT EST DIFFERENT ?
            if ($user['id_user'] != $user_next) {
                $margin = 'mb_msg';
                $pseudo = '<p class="msg_pseudo">'.$user['pseudo_user'].'</p>';
                $date = '<span class="tooltiptext">' . $user['date_msg'] . '</span >';
                $avatar = '<div class="img_cont_msg"><img src="img/pdp/' . $user['pdp_user'] . '" class="rounded-circle user_img_msg"></div>';
            } else {
                $margin = 'mb_msg_suite';
                $pseudo = '';
                $date = '<span class="tooltiptext">' . $user['date_msg'] . '</span >';
                $avatar = '<div class="img_cont_msg" style="opacity: 0;"><img src="img/pdp/' . $user['pdp_user'] . '" class="rounded-circle user_img_msg"></div>';
            }

            echo $pseudo;
            echo '<div class="d-flex justify-content-start ' . $margin . '">';
            echo $avatar;
            echo '<div class="msg_cotainer">' . $user['texte_msg'];
            echo $date;
            echo '</div>';
            echo '</div>';

        }
    }


    ?>
</div>