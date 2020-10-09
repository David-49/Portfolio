<?php include('header.php'); ?>


      <div class="presentation">
        <h1 class="titre">Bonjour, je m'appelle David Dognin</h1>
        <p class="sousTitre">Bienvenue sur mon portfolio</p>
      </div>
      <div class="illustration"></div>
      <!-- <a class="credit" href="https://www.freepik.com/free-photos-vectors/people">People vector created by pikisuperstar - www.freepik.com</a> -->

<?php include('reseauxSociaux.php'); ?>

    </section>
    <section class="partieDeux">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920.33 684.64" class="formeVague">
        <g id="Calque_1-2" data-name="Calque 1">
          <path class="cls-1" d="M1920,.5H.5v491s870.22,36.58,999.22,154S1816,583.86,1920,493.37" />
        </g>
      </svg>

      <div class="blocIntroduction">
        <h2 class="titreIntro">A propos de moi</h2>
        <div class="introduction">
          <p class="introParagraphe">
            Étudiant dans une formation "Web & Digital". Je suis un grand <span class="mettreEnAvant">passionné</span> des nouvelles technologies et toujours <span class="mettreEnAvant">curieux</span> d'en apprendre plus. J'aime <span class="mettreEnAvant">donner vie</span> à mes projets grâce à ce que j'apprends.
          </p>
        </div>
      </div>

      <div class="eauProfonde">
        <a id="titre2"></a>
        <h2 class="titreComp">Mes compétences</h2>
        <div class="blocTriangle">
          <div class="triangle1"></div>

          <div class="competences1">
            <div class="dev">
              <p class="titreDev">Développement</p>
              <p class="paraDev">Quelques lignes pour créer un nouveau monde.  "Hello world" !</p>
            </div>
            <div class="langages">
              <p class="titreOutils">Langages que je parle :</p>
              <ul class="blocOutils">
                <li class="listOutils">HTML</li>
                <li class="listOutils">CSS</li>
                <li class="listOutils">Javascript</li>
                <li class="listOutils">PHP</li>
              </ul>
            </div>
            <div class="outils1">
              <p class="titreOutils">Outils que j'utilise :</p>
              <ul class="blocOutils">
                <li class="listOutils">Atom</li>
                <li class="listOutils">GitHub</li>
                <li class="listOutils">Codepen</li>
              </ul>
            </div>
          </div>


          <div class="sousMarin1 sousMarin_x">

            <div class="bulle">
              <div class="bulle_5 bulle_x"></div>
              <div class="bulle_4 bulle_x"></div>
              <div class="bulle_3 bulle_x"></div>
              <div class="bulle_2 bulle_x"></div>
              <div class="bulle_1 bulle_x"></div>
            </div>

          </div>

        </div>

        <div class="blocTriangle2">
          <div class="sousMarin2 sousMarin_x"></div>
          <div class="triangle2"></div>
          <div class="competences2">
            <div class="design">
              <p class="titreDesign">Design</p>
              <p class="paraDesign">Une idée et c'est parti pour créer.</p>
            </div>
            <div class="outils2">
              <p class="titreOutils">Outils que j'utilise :</p>
              <ul class="blocOutils">
                <li class="listOutils">Xd</li>
                <li class="listOutils">Illustrator</li>
                <li class="listOutils">Photoshop</li>
                <li class="listOutils">Lightroom</li>
                <li class="listOutils">...</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="blocBasSuite">
          <a id="titre3"></a>
          <h2 class="titreProjet">Mes Projets</h2>
          <div class="blocProjet">

            <div class="projet">
              <img class="imageP" src="img/img_projets/page_accueil_cyclez-min.png" alt="Page d'accueil du site web cyclez.com">
              <div class="overlay">
                <div class="blocDesc">
                <a href="https://www.cyclez.com/" class="lien-projet"><i class="fas fa-external-link-alt"></i> Voir le site</a>
                <div class="discover-project">
                  <?php
                  if ($adresse == "localhost") {
                      $projetCyclez = 'cyclez.php';
                  } elseif ($adresse == "daviddognin.com" || $adresse == "www.daviddognin.com") {
                      $projetCyclez = 'https://daviddognin.com/cyclez.php';
                  }
                  ?>
                  <a href="<?= $projetCyclez; ?>" class="see-more">Découvrir l'histoire du projet</a>
                </div>
                </div>
              </div>
            </div>

            <div class="projet">
              <img class="imageP" src="img/img_projets/partiel_piikti.png" alt="Page d'accueil du projet site web de piikti">
              <div class="overlay">
                <div class="blocDesc">
                  <div class="discover-project">
                    <?php
                    if ($adresse == "localhost") {
                        $projetPiikti = 'piikti.php';
                    } elseif ($adresse == "daviddognin.com" || $adresse == "www.daviddognin.com") {
                        $projetPiikti = 'https://daviddognin.com/piikti.php';
                    }
                    ?>
                    <a href="<?= $projetPiikti; ?>" class="see-more">Découvrir l'histoire du projet</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="projet">
              <img class="imageP" src="img/img_projets/projet_partiel.jpg" alt="Photo représentant une page d'un site web que j'ai réalisé lors de mes partiels">
              <div class="overlay">
                <div class="blocDesc">
                  <div class="discover-project">
                    <?php
                    if ($adresse == "localhost") {
                        $projetRencontre = 'la-rencontre.php';
                    } elseif ($adresse == "daviddognin.com" || $adresse == "www.daviddognin.com") {
                        $projetRencontre = 'https://daviddognin.com/la-rencontre.php';
                    }
                    ?>
                    <a href="<?= $projetRencontre; ?>" class="see-more">Découvrir l'histoire du projet</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--fin blocProjet -->
        </div>
        <!-- fin blocBasSuite -->
      </div>
      <!-- fin div eau profonde -->

      <a href="#haut" class="retourHaut"><img class="fleche" src="img/illustration/arrow-up-solid.svg" alt="flèche clicable pour remonter en haut de page"></a>

<?php include('footer.php'); ?>
