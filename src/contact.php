<?php include('header.php'); ?>

<?php include('reseauxSociaux.php'); ?>


    <div class="blocContact">
      <h1 class="contactMe">Me contacter</h1>
      <div class="methode1">
        <p>Par email : </p>
        <a href="mailto:david.dognin@gmail.com" class="lienMail">david.dognin@gmail.com</a>
      </div>

      <p class="methode2">Ou via ce formulaire :</p>

      <form action="" class="formulaireContact" method="post">
        <label for="select-nom">Nom * :</label>
        <input type="text" name="nom" placeholder="Rentrez ici votre nom" required>

        <label for="select-mail">Email * :</label>
        <input type="email" name="email" placeholder="Votre email" required>

        <label for="select-objet">Objet * :</label>
        <input type="text" name="objet" placeholder="Indiquez votre objet" required>

        <label for="select-message">Message * :</label>
        <textarea name="message" rows="10" placeholder="Tapez ici votre message" required></textarea>

        <div class="g-recaptcha recaptcha" data-sitekey="6Ldu1NUUAAAAACZIQpb6FzydGgETHEfjcP5Z4Sbe"></div>

        <button type="submit" name="button" class="boutonForm">Envoyer</button>
      </form>

      <?php
      //vérifie que le formulaire a bien été validé
      if (isset($_POST['button'])) {

        //vérifie que tous les champs sont remplies
          //Si oui, on poursuit avec la vérification des champs du formulaire
          //Si non, on prévient l'utilisateur que tous les champs ne sont pas remplies
          if (!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['objet']) and !empty($_POST['message'])) {
              $nom = $_POST['nom'];
              $email = $_POST['email'];
              $objet = $_POST['objet'];
              $messageForm = $_POST['message'];

              $nomTaille = strlen($nom);
              $objetTaille = strlen($objet);
              $messageTaille = strlen($messageForm);

              $nom = trim(strtoupper(htmlspecialchars($nom)));
              $objet = trim(ucfirst(strtolower(htmlspecialchars($objet))));
              $messageForm = trim(htmlspecialchars($messageForm));
              $email = trim(htmlspecialchars($email));

              if ($nomTaille <= 255) {
                  if ($objetTaille <= 255) {
                      if ($messageTaille <= 10000) {
                          if (preg_match(" /^.+@.+\.[a-zA-Z]{2,}$/ ", $email) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              require_once 'recaptcha/autoload.php';

                              if (isset($_POST['g-recaptcha-response'])) {
                                  $recaptcha = new \ReCaptcha\ReCaptcha('6Ldu1NUUAAAAAGITrioIWEVdb6rJvniKcQdQQOOk');
                                  $resp = $recaptcha->verify($_POST['g-recaptcha-response']);

                                  if ($resp->isSuccess()) {
                                      $header="MIME-Version: 1.0\r\n";
                                      $header.='From:'.$nom.'<'.$email.'>'."\n";
                                      $header.='Content-Type:text/html; charset="utf-8"'."\n";
                                      $header.='Content-Transfer-Encoding: 8bit';

                                      $message='
                          <html>
                            <body>
                              <div align="center">
                               <br />
                                <u>Nom de l\'expéditeur : </u>'.$nom.'<br />
                                <u>Mail de l\'expéditeur : </u>'.$email.'<br />
                                <br />
                                '.nl2br($messageForm).'
                                <br />
                              </div>
                            </body>
                          </html>
                          ';

                                      mail('contact@daviddognin.com', $objet, $message, $header);



                                      $msg = "<p class='msgPositif'>Votre message a bien été envoyé !</p>";
                                  } else {
                                      $errors = $resp->getErrorCodes();
                                      var_dump($errors);
                                      $msg = "<p class='msgNegatif'>Captcha invalide, le message n'a pas pu être envoyé. Veuillez réessayer.</p>";
                                  }
                              } else {
                                  $msg = "<p class='msgNegatif'>Captcha non rempli</p>";
                              }
                          } else {
                              $msg = "<p class='msgNegatif'>L'email est invalide, le message n'a pas pu être envoyé.</p>";
                          }
                      } else {
                          $msg = "<p class='msgNegatif'>Votre message a dépassé la limite des 10 000 caractères.</p>";
                      }
                  } else {
                      $msg = "<p class='msgNegatif'>Votre objet dépasse les 255 caractères limites.</p>";
                  }
              } else {
                  $msg = "<p class='msgNegatif'>Votre nom dépasse les 255 caractères limites.</p>";
              }
          } else {
              $msg = "<p class='msgNegatif'>Tous les champs doivent être complétés !</p>";
          }
      }

      if (isset($msg)) {
          echo $msg;
      }

      ?>

    </div>
    <!-- fin div blocContact -->

<?php include('footer.php'); ?>
