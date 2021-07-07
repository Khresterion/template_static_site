<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>
<?php require_once 'view/view_contact.php' ?>
<?php require_once 'controller/mail.php' ?>


<?php callHead("LogOn Company - Contact", "assets/style/contact.css") ?>
<?php callNav() ?>
<?php callContact() ?>

<?php

// $success = null;
// $error = null;

// if (isset($_POST['send'])) {
//     $position_arobase = strpos($_POST['mail'], '@');
//     if ($position_arobase === false) {
//         // echo '<p>Votre email doit comporter un arobase.</p>';
//     } else {
//         $return = mail('axios.ludis@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mail']);
//         if ($return) {
//             // echo '<p>Votre message a été envoyé.</p>';
//             $success = "<strong>Success!</strong> Your message have been send successfully!";
//         } else {
//             // echo '<p>Erreur.</p>';
//             $error = "There is an error here...";
//         }
//     }
// }
?>

<?php callFooter() ?>