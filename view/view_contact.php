<?php
// require_once 'controller/mail.php';


function callContact()

{

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
                    $return = mail('contact@logoncompany.com', 'Envoi depuis la page Contact de Logon Company', $_POST['message'], ("sujet : " . $_POST['subject']), 'From: ' . $_POST['mail']);
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

?>
    <section class="header-page-2"></section>
    <section id="section1">
        <div class=" container_section_1">
            <div class="formulaire">
                <form id="contact" action="" method="post">
                    <div class="header">
                        <div class="headerTitles">
                            <h3>Contactez-nous</h3>
                            <h4>Un projet, un devis, une idée ? parlons-en</h4>
                        </div>
                        <div class="headerLink">
                            <div> <a href="index.php"><i class="fas fa-home fa-2x"></i></a></div>
                        </div>
                    </div>

                    <fieldset>
                        <input placeholder="Nom" type="text" id="name" name="name" tabindex="1" size="60" autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Mail" id="mail" type="email" name="mail" tabindex="2">
                        <span class="error" aria-live="polite"></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Téléphone (optionel)" id="tel" name="tel" type="tel" tabindex="3">
                    </fieldset>
                    <fieldset>
                        <input placeholder="Sujet" id="subject" name="subject" type="text" tabindex="4">
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="De quoi allons-nous parler ?" id="message" name="message" tabindex="5"></textarea>
                    </fieldset>
                    <!-- <fieldset> -->
                    <button name="send" type="submit" id="contact-submit" data-submit="...Sending">ENVOYER</button>
                    <?php if ($success) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert"><button type=" button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button><?= $success ?>
                        </div>
                    <?php endif ?>
                    <?php if ($error) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert"><button type=" button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button><?= $error ?>
                        </div>
                    <?php endif ?>
                    <!-- </fieldset> -->
                </form>
            </div>

            <div class="data">
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Saint-Brieuc <span class="style-logo">x</span> Rennes | Bretagne</h3>
                        </p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+33 7 83 28 90 11</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@logoncompany.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section id="section2">
        <hr class="hr-1">
        <div class="container container_section_2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35563.89282577805!2d-2.791129092998063!3d48.508272273079164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e1d4129562b03%3A0x40ca5cd36e62a40!2s22000%20Saint-Brieuc!5e0!3m2!1sfr!2sfr!4v1625556389342!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </section>

<?php
}
?>