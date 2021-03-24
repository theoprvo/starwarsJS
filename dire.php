<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=chat', 'theo', 'toto');

$message = htmlspecialchars($_GET['text_msg']);

if (empty($message) == true) {
    echo 'Veuillez mettre du texte';
}   else {
    $db->query('INSERT INTO message(texte_msg, date_msg, _id_user) VALUES("' . $message . '", DATE_FORMAT(NOW(), "%d/%m/%y"), '.$_SESSION['user_id'].' );');
}