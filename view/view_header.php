<?php

function callHead(string $title, string $css)
{

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title><?= $title ?></title>

        <link rel="shortcut icon" href="assets/images/LGNC-Favicon.png">

        <meta name="image" property="og:image" content="">
        <meta name="author" content="">
        <meta name="description" property="og:description" content="">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="assets/style/common.css">
        <link rel="stylesheet" href=<?= $css ?>>

    </head>

    <body>

    <?php }

function callNav()
{
    ?>

        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>

        <nav role="navigation">
            <div id="menuToggle">

                <input type="checkbox" />

                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <a href="index.php">
                        <li>Accueil</li>
                    </a>
                    <hr class="divider">
                    <a href="#">
                        <li>Créations</li>
                    </a>
                    <a href="#">
                        <li>Impressions</li>
                    </a>
                    <a href="photos.php">
                        <li>Photos</li>
                    </a>
                    <a href="#">
                        <li>Branding</li>
                    </a>
                    <a href="#">
                        <li>Actualité</li>
                    </a>
                    <a href="#">
                        <li>Contact</li>
                    </a>

                </ul>
            </div>
        </nav>

    <?php }

function callHeaderImage()
{

    ?>

        <div class="head-image">
            <!-- Overlay -->
            <div class="overlay"></div>
            <div class="header-1"></div>
            <div class="hero">
                <img src="assets/images/LGNCLogoWhite.png" alt="logo" data-aos="zoom-out" data-aos-duration="3000">
                <!-- <h1>Main Title</h1>         -->
                <h3 class="mt-5">Expert en communication<br>
                    Saint-Brieuc & Rennes | Bretagne</h3>
            </div>
        </div>

    <?php }
