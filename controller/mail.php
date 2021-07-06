<?php
include (__DIR__) . '/../functions/functions.php';
include (__DIR__) . '/../functions/regex.php';
// @$name = $_POST['name'];
// @$email = $_POST['email'];
// @$message = $_POST['message'];
// @$subject = $_POST['subject'];
// header('Content-Type: application/json');
// if ($name === '') {
//     print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
//     exit();
// }
// if ($email === '') {
//     print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
//     exit();
// } 
// else {
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
//         exit();
//     }
// }
// if ($subject === '') {
//     print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
//     exit();
// }
// if ($message === '') {
//     print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
//     exit();
// }
// $content = "From: $name \nEmail: $email \nMessage: $message";
// $recipient = "axios.ludis@gmail.com";
// $mailheader = "From: $email \r\n";
// $status = mail($recipient, $subject, $content, $mailheader, $header);
// echo $status ? 'Mail sent' : 'Error sending mail';
// print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
// exit();


$success = $error = null;
$isThereError = false;

$nomRegex = "/[A-Za-z\é\è\ê\-]+$/";
$emailRegex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

$nomErr = $messageErr =  $emailErr = "";

$nomErr = $messageErr =  $emailErr = "";

if (isset($_POST["name"], $_POST["mail"], $_POST["message"])) {

    $name = secure_input($_POST['name']);
    $email = secure_input($_POST['mail']);
    $message = secure_input($_POST['message']);

    if (empty($name)) {
        $nomErr = "Nom requis";
        $isThereError = true;
    } elseif (!preg_match($nomRegex, $name)) {
        $nomErr = "lettres et espaces uniquement";
        $isThereError = true;
    }
    /////////////////////////////////////
    if (empty($email)) {
        $emailErr = "email requis";
        $isThereError = true;
    } elseif (!preg_match($emailRegex, $email)) {
        $emailErr = "lettres et espaces uniquement";
        $isThereError = true;
    }
    /////////////////////////////////////
    if (empty($message)) {
        $messageErr = "Le message ne doit pas être vide";
        $isThereError = true;
    }
    // Condition par rapport aux regex pour imprimer les données dans la table
    if (preg_match($nomRegex, $name) && preg_match($emailRegex, $email) && !$isThereError) {

        if (isset($_POST['send'])) {
            $position_arobase = strpos($_POST['mail'], '@');
            if ($position_arobase === false) {
            } else {
                $return = mail('axios.ludis@gmail.com', 'Envoi depuis la page Contact de Logon Company', $_POST['message'], ("sujet : " . $_POST['subject']), 'From: ' . $_POST['mail']);
                if ($return) {
                    // header('Location: https://dark-room.fr/contact.php/');
                    $success = "<strong>Succès!</strong> Votre message a bien été envoyé!";
                } else {
                    $error = "Il y a une erreur par ici...";
                }
                // header("location: ../contact.php");
            }
            exit();
        }
    }
}
