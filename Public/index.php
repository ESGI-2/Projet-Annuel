<!DOCTYPE html>
<html lang="fr"> <!-- Ajout de la langue française par défaut -->

<head>
  <title>Accueil - The Key Of Happiness</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
</head>

<body>
  <header>
    <h1 class="logo">The Key Of Happiness</h1>
  </header>

  <main class="container">
    <section class="login">
      <h2 class="subtitle">Le chemin de la sécurité est souvent le plus heureux</h2>
      <?php require_once '../Controller/SignInController.php'; ?>

      <?php if (isset($_POST['submit']) && $errorMessage !== null): ?>
        <p class="error">
          <?php echo $errorMessage; ?>
        </p>
      <?php endif; ?>

      <!-- Formulaire de connexion -->
      <?php require_once '../View/SignIn.php'; ?>

      <p>Pas encore de compte ? <a href="../View/SignUp.php">S'inscrire</a></p>
    </section>
  </main>
</body>

</html>