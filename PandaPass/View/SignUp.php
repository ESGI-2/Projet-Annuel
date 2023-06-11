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
    <title>PandaPass</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>
<form method="post" enctype="multipart/form-data">
  <label for="pseudo">Pseudo :</label>
  <input type="text" name="pseudo" required><br>
  
  <label for="mot_de_passe">Mot de passe :</label>
  <input type="password" name="mot_de_passe" required><br>

  <input type="submit" name="submit" value="S'inscrire">
</form>
</body>
</html>
