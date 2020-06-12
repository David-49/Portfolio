<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta name="description" content="Étudiant dans une formation 'Web & Digital'. Je suis un grand passionné des nouvelles technologies et toujours curieux d'en apprendre plus.">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b51ebbfc71.js" crossorigin="anonymous"></script>
    <?php
    $adresse = $_SERVER['SERVER_NAME'];
    if ($adresse == "localhost") {
        $lienCss = 'style_maintenance.css';
    } elseif ($adresse == "daviddognin.com" || $adresse == "www.daviddognin.com") {
        $lienCss = 'css/style_maintenance.css';
    }
    ?>
    <link rel="stylesheet" href="<?=$lienCss; ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap" rel="stylesheet">

    <title>David Dognin | Développeur web</title>
</head>

<body>


<div class="maintenance">
    <div class="blocPhraseMaintenance">
        <p class="phraseMaintenance">Mon portfolio est actuellement en cours de mise à jour</p>
        <p class="phraseMaintenance2">Veuillez revenir plus tard.</p>
    </div>
    <div class="chargement">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="reseauxSociauxMaintenance">
      <a href="https://twitter.com/dognindavid"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/daviddognin/"><i class="fab fa-linkedin"></i></a>
      <a href="https://github.com/David-49"><i class="fab fa-github-square"></i></a>
      <a href="mailto:david.dognin@gmail.com"><i class="fas fa-envelope"></i></a>
    </div>
</div>

</body>
</html>
