<!-- connexion.php -->
<!DOCTYPE html>
<html>
  <head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>
    <h1>Connexion</h1>
    <?php if (isset($_POST['submit']) && $errorMessage !== null): ?>
      <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <form method="POST" action="../Controller/SignInController.php">
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" required><br>

      <label for="mot_de_passe">Mot de passe :</label>
      <input type="password" name="mot_de_passe" required><br>

      <input type="submit" name="submit" value="Se connecter">
    </form>
  </body>
</html>
