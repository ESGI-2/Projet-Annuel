<?php
require_once '../Model/ManagerModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $pseudo = $_POST['pseudo'];
  $identifiant = $_POST['identifiant'];
  $motDePasse = $_POST['mot_de_passe'];
  $url = $_POST['url'];

  // Créer une instance du modèle ManagerModel
  $managerModel = new ManagerModel();

  // Créer un nouvel objet Manager avec les données du formulaire
  $manager = new Manager($pseudo, $identifiant, $motDePasse, $url);

  // Appeler la méthode createManager pour ajouter le nouveau manager à la base de données
  $managerModel->createManager($manager);

  // Rediriger vers une page de succès ou afficher un message de succès
  echo "Le manager a été ajouté avec succès.";
}
?>
