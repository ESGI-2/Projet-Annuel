<?php
require_once '../Model/Manager.php';
require_once '../Model/ManagerModel.php';

//page d'inscription
class ManagerController
{
  private $managerModel;

  public function __construct()
  {
    $this->managerModel = new ManagerModel();
  }

  public function registerManager()
  {
    // Vérification de la soumission du formulaire
    if (isset($_POST['submit'])) {
      // Récupération des données du formulaire
      $pseudo = htmlspecialchars(trim($_POST['pseudo']));
      $identifiant = htmlspecialchars(trim($_POST['identifiant']));
      $motDePasse = htmlspecialchars(trim($_POST['password']));
      $url = htmlspecialchars(trim($_POST['url']));

      // Validation des données
      $errors = [];
      if (empty($pseudo)) {
        $errors[] = 'Le champ pseudo est obligatoire'; //Gestion d'erreur
      }
      if (empty($identifiant)) {
        $errors[] = 'Le champ identifiant est obligatoire'; //Gestion d'erreur
      }
      if (empty($motDePasse)) {
        $errors[] = 'Le champ mot de passe est obligatoire'; //Gestion d'erreur
      }
      if (empty($url)) {
        $errors[] = 'Le champ url est obligatoire'; //Gestion d'erreur
      }

      // Enregistrement de l'utilisateur s'il n'y a pas d'erreurs
      if (empty($errors)) {
        // Création d'une instance de User
        $manager = new Manager($pseudo, $identifiant, $motDePasse, $url);

        // Enregistrement de l'utilisateur dans la base de données
        $this->managerModel->createManager($manager);

        // Redirection vers la page d'accueil
        include '../View/Home.php';
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