<?php
require_once '../Controller/ManagerController.php';

// Création gestionnaire de mot de passe
$managerController = new ManagerController();

// Appel de la méthode registerUser() si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $managerController->registerManager();
}
?>

<!-- Formulaire gestionnaire de mot de passe -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Gestionnaire de mot de passe</title>
  <link rel="stylesheet" type="text/css" href="">
</head>

<body>
  <form method="post" enctype="multipart/form-data">
    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" required><br>

    <label for="pseudo">Identifiant :</label>
    <input type="text" name="identifiant" required><br>

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" name="password" required><br>

    <label for="pseudo">Url :</label>
    <input type="text" name="url" required><br>

    <input type="submit" name="submit" value="Stocker">
  </form>
</body>

</html>