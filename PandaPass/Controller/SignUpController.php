<?php
require_once '../Model/Users.php';
require_once '../Model/UsersModel.php';

//page d'inscription
class SignUpController {
  private $userModel;

  public function __construct() {
    $this->userModel = new UsersModel();
  }

  public function registerUser() {
    // Vérification de la soumission du formulaire
    if (isset($_POST['submit'])) {
      // Récupération des données du formulaire
      $pseudo = htmlspecialchars(trim($_POST['pseudo']));
      $motDePasse = htmlspecialchars(trim($_POST['mot_de_passe']));

      // Validation des données
      $errors = [];
      if (empty($pseudo)) {
        $errors[] = 'Le champ pseudo est obligatoire'; //Gestion d'erreur
      }
      if (empty($motDePasse)) {
        $errors[] = 'Le champ mot de passe est obligatoire';//Gestion d'erreur
      }

      // Enregistrement de l'utilisateur s'il n'y a pas d'erreurs
      if (empty($errors)) {
        // Création d'une instance de User
        $user = new Users($pseudo,$motDePasse);

        // Enregistrement de l'utilisateur dans la base de données
        $this->userModel->createUser($user);

        // Redirection vers la page d'accueil
        include '../View/home.php';
        exit();
      } else {
        // Affichage des erreurs
        $errorMessage = implode('<br>', $errors);
        include '../View/SignUp.php';
      }
    } else {
    // Affichage du formulaire d'inscription
      include '../View/SignUp.php';
    }
  }
}

?>
