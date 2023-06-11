<?php
require_once '../Model/Users.php';
require_once '../Model/UsersModel.php';

//page_de_connexion
class SignInController {
  private $userModel;

  public function __construct() {
    $this->userModel = new UsersModel();
  }

  public function loginUser() {
    $errorMessage = null; // Initialisation de la variable d'erreur à null
    // Vérification de la soumission du formulaire
    if (isset($_POST['submit'])) {
      // Récupération des données du formulaire
      $pseudo = htmlspecialchars(trim($_POST['pseudo']));
      $motDePasse = htmlspecialchars(trim($_POST['mot_de_passe']));

      // Vérification des informations de connexion
      $user = $this->userModel->getUserByPseudo($pseudo);
      if ($user !== null && $motDePasse === $user->getMotDePasse()) {
        session_start();
        //$_SESSION['user'] = $user;
        $_SESSION['pseudo'] = $pseudo;
        header("Location: ../View/home.php");
        exit();
      } else {
        // Authentification échouée
        $errorMessage = 'Le pseudo ou le mot de passe est incorrect';
      }
    }
    include '../View/SignIn.php';
  }
}
$controller = new SignInController();
$controller->loginUser();
?>
