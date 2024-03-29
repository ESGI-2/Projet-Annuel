<!-- connexion.php -->
<!DOCTYPE html>
<html>

<head>
  <title>Connexion</title>
  <link href="../Public/css/SignInStyle.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <h1>Connexion</h1>

    <?php if (isset($_POST['submit']) && $errorMessage !== null): ?>
      <p>
        <?php echo $errorMessage; ?>
      </p>
    <?php endif; ?>

    <form method="POST" action="../Controller/SignInController.php">
      <div class="input_box">
        <input type="text" name="pseudo" required />
        <span></span>
        <label for="pseudo">Nom d'utilisateur</label>
      </div>

      <div class="input_box">
        <input type="password" id="pwd" name="mot_de_passe" required />
        <span></span>
        <label for="mot_de_passe">Mot de passe</label>
      </div>

      <input type="submit" name="submit" value="Se connecter" />
    </form>
  </div>
</body>

</html>