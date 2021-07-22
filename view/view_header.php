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

        <!-- <link rel="stylesheet" href="assets/style/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        <link rel="stylesheet" href="assets/style/common.css">
        <link rel="stylesheet" href=<?= $css ?>>
        <link rel="stylesheet" href="assets/style/queries.css">

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3JDFG4PRSR"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-3JDFG4PRSR');
        </script>

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
                    <a href="creations.php">
                        <li>Créations</li>
                    </a>
                    <a href="impressions.php">
                        <li>Impressions</li>
                    </a>
                    <a href="photos.php">
                        <li>Photos</li>
                    </a>
                    <a href="branding.php">
                        <li>Branding</li>
                    </a>
                    <a href="contact.php">
                        <li>Contact</li>
                    </a>

                </ul>
            </div>
        </nav>

    <?php 
}

function callNav2(){

    ?>

<div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fas fa-2x fa-angle-up"></i>
            </span>
        </div>

<div class="navigation" >
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle"  />

      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>

      <div class="navigation__background">&nbsp;</div>

      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="index.php" class="navigation__link">Accueil</a>
          </li>
          <li class="navigation__item">
            <a href="creations.php" class="navigation__link">Créations</a>
          </li>
          <li class="navigation__item">
            <a href="impressions.php" class="navigation__link">Impressions</a>
          </li>
          <li class="navigation__item">
            <a href="photos.php" class="navigation__link">Photos</a>
          </li>
          <li class="navigation__item">
            <a href="branding.php" class="navigation__link">Branding</a>
          </li>
          <li class="navigation__item">
            <a href="contact.php" class="navigation__link">Contact</a>
          </li>
        </ul>
      </nav>
    </div>


    <?php
}

function callHeaderImage()
{

    ?>

        <div class="head-image">
            <!-- Overlay -->
          <!--   <div class="overlay"></div> -->
             <!-- <div class="header-1"></div>  -->
             <div class="bg-video"> 
          <video class="bg-video__content" autoplay muted loop>
            <source src="assets/images/bg.mp4" type="video/mp4" />

          </video>
        </div>
            <div class="hero">
                <img src="assets/images/LGNCLogoWhite.png" alt="logo" class="logo--img rellax" data-rellax-speed="-2" >
                <h1 class="rellax" data-rellax-speed="-3">LogOn compagny expert en communication<h1>        
                <h3 class="mt-5 rellax" data-rellax-speed="-3" >Expert en communication<span class="style-logo">.</span><br>
                    Saint-Brieuc <span class="style-logo">X</span> Rennes | Bretagne</h3>
            </div>
        </div>

    <?php }
