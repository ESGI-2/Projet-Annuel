<?php
require_once '../Model/ManagerModel.php';

$managerModel = new ManagerModel();
$pseudo = 'cams';

$managers = $managerModel->getManager();

foreach ($managers as $manager) {
  if ($manager->getPseudo() === $pseudo) {
    echo "ID: " . $manager->getId() . "<br>";
    echo "Pseudo: " . $manager->getPseudo() . "<br>";
    echo "Identifiant: " . $manager->getIdentifiant() . "<br>";
    echo "Mot de passe: " . $manager->getMotDePasse() . "<br>";
    echo "URL: " . $manager->getUrl() . "<br>";
    echo "<br>";
  }
}

?>

<form action="../Controller/AjouterManager.php" method="POST">
  <input type="hidden" name="pseudo" value="<?php echo $pseudo; ?>">

  <label for="url">URL :</label>
  <input type="text" name="url" id="url" required><br>

  <label for="identifiant">Identifiant :</label>
  <input type="text" name="identifiant" id="identifiant" required><br>

  <label for="mot_de_passe">Mot de passe :</label>
  <input type="password" name="mot_de_passe" id="mot_de_passe" required><br>

  <input type="submit" value="Ajouter">
</form>