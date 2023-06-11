<?php
require_once '../Model/UsersModel.php';

// Créer une instance du modèle UsersModel
$usersModel = new UsersModel();
$userId = '1';

// Obtenir l'utilisateur connecté en utilisant son ID
$user = $usersModel->getUserById($userId);

if ($user) {
  // Afficher les détails du profil
  echo "ID : " . $user->getId() . "<br>";
  echo "Pseudo : " . $user->getPseudo() . "<br>";
  echo "Mot de passe : " . $user->getMotDePasse() . "<br>";
} else {
  echo "Utilisateur non trouvé.";
}
?>
