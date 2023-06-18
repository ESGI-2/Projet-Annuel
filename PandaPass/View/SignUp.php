<?php
require_once '../Controller/SignUpController.php';

// Création d'une instance de InscriptionController
$inscriptionController = new SignUpController();

// Appel de la méthode registerUser() si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $inscriptionController->registerUser();
}
?>

<!-- Formulaire d'inscription -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link href="../Public/css/SignUpStyle.css" rel="stylesheet"/>
  </head>

  <body>
    <div class="container">
      <h1>Inscription</h1>

      <form method="post" enctype="multipart/form-data">
        <div class="input_box">
          <input type="text" name="pseudo" required />
          <span></span>
          <label for="pseudo">Nom d'utilisateur</label>
        </div>

        <div class="input_box">
          <input type="password" id="pwd" name="mot_de_passe" required />
          <span></span>
          <label for="mot_de_passe">Mot de passe</label>
        </div>

        <input type="submit" name="submit" value="S'inscrire" />
      </form>
    </div>
  </body>
</html>
