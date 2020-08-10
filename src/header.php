<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta name="description" content="Étudiant dans une formation 'Web & Digital'. Je suis un grand passionné des nouvelles technologies et toujours curieux d'en apprendre plus.">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

     <!--  build:css ./css/style.min.css -->
    <link rel="stylesheet" href="./css/style.css">
   <!-- /build -->

    <script src="https://kit.fontawesome.com/b51ebbfc71.js" crossorigin="anonymous"></script>
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162256494-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-162256494-1');
    </script> -->

    <?php
    $adresse = $_SERVER['SERVER_NAME'];
    $url = $_SERVER['PHP_SELF'];
    $pos = strripos($url, "/")+1;
    $url =  substr($url, $pos);


    if ($url == "index.php") {
        $title = "David Dognin | Développeur web";
    } elseif ($url ==  "mentions_legales.php") {
        $title = "Mentions légales - David Dognin";
    } elseif ($url == "contact.php") {
        $title = "Me contacter - David Dognin";
    }
    ?>
    <title><?= $title; ?></title>
</head>

<body>
  <div class="wrapper">
      <?php

      if ($url == "index.php") {
          ?>
          <a id="haut"></a>
          <section class='accueil'>
              <?php
      }

      if ($url == "mentions_legales.php") {
          ?>
          <a id="haut"></a>
          <?php
      }

      ?>

    <header class="header">
        <?php
        if ($adresse == "localhost") {
            $accueil = 'index.php';
        } elseif ($adresse == "daviddognin.com" || $adresse == "www.daviddognin.com") {
            $accueil = 'https://daviddognin.com/';
        }
        ?>
      <a href="<?= $accueil; ?>" class="nomLogo">David Dognin</a>
      <nav class="nav">
        <ul class="menu">
            <?php if ($url == "index.php") {
            ?>
                <li class="listeMenu"><a href="#titre1" class="goTitre">A propos de moi</a></li>
                <li class="listeMenu"><a href="#titre2" class="goTitre">Compétences</a></li>
                <li class="listeMenu"><a href="#titre3" class="goTitre">Projets</a></li>
                <?php
        } else {
            ?>
                <li class="listeMenu"><a href="<?=$accueil?>#titre1" class="goTitre">A propos de moi</a></li>
                <li class="listeMenu"><a href="<?=$accueil?>#titre2" class="goTitre">Compétences</a></li>
                <li class="listeMenu"><a href="<?=$accueil?>#titre3" class="goTitre">Projets</a></li>
                <?php
        }


            ?>

        </ul>
        <div class="burger">
          <span></span>
        </div>

        <div class="blocMenuResponsive navResponsive">
          <ul class="menuResponsive">

              <?php
                if ($url == "index.php") {
                    ?>
                    <li class="listeMenuToggle"><a href="#titre1" class="goTitreToggle">A propos de moi</a></li>
                    <li class="listeMenuToggle"><a href="#titre2" class="goTitreToggle">Compétences</a></li>
                    <li class="listeMenuToggle"><a href="#titre3" class="goTitreToggle">Projets</a></li>
                    <?php
                } else {
                    ?>
                    <li class="listeMenuToggle"><a href="<?=$accueil?>#titre1" class="goTitreToggle">A propos de moi</a></li>
                    <li class="listeMenuToggle"><a href="<?=$accueil?>#titre2" class="goTitreToggle">Compétences</a></li>
                    <li class="listeMenuToggle"><a href="<?=$accueil?>#titre3" class="goTitreToggle">Projets</a></li>

                    <?php
                }
              ?>


          </ul>
          <div class="reseauxSociauxToggle">
            <a href="https://twitter.com/dognindavid"><img src="img/logo/twitter-brands.svg" alt="logo de twitter"></a>
            <a href="https://www.linkedin.com/in/daviddognin/"><img src="img/logo/linkedin-brands.svg" alt="logo de linkedin"> </a>
            <a href="https://github.com/David-49"><img src="img/logo/github-square-brands.svg" alt="logo de Github"></a>
            <a href="contact.php"><img src="img/logo/envelope-solid.svg" alt="Logo représentant une envelope"></a>
          </div>
        </div>
      </nav>
    </header>
