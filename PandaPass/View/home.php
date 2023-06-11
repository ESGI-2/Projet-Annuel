<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../Public/js/Generator.js" defer></script>
  <link rel="stylesheet" href="../Public/css/HomeStyle.css">
  <title>Home</title>
</head>

<body>
  <nav>
  <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="PrintManager.php">Gestionnaire de mot de passe</a></li>
        <li class="dropdown">
          <a href="MyProfile.php" class="dropbtn">Mon profil</a>
          <div class="dropdown-content">
            <a href="../Public/index.php">Se déconnecter</a>
          </div>
        </li>
      </ul>
  </nav>

  <div class="container">
    <h1 class="title">Générateur de Mot de Passe</h1>
    <h3 class="displayPwd" id="displayPwd">Mot de Passe</h3>
    <form id="generatorForm" class="form">
      <!--! Longueur mot de passe -->
      <label for="characterAmountNumber">Nombre de caractères :</label>
      <div class="characterAmount">
        <input type="range" min="1" max="50" value="8" id="characterAmountRange">
        <!-- Slider pour le nombre de caractères -->
        <input class="number" type="number" min="8" max="50" value="8" id="characterAmountNumber">
        <!-- Choisir le nombre -->
      </div>

      <!--! Ajout majuscules -->
      <label for="uppercase">Majuscules :</label>
      <input type="checkbox" id="uppercase">

      <!--! Ajout nombres -->
      <label for="numbers">Nombres :</label>
      <input type="checkbox" id="numbers">

      <!--! Ajout caractères spéciaux -->
      <label for="symbols">Caractères spéciaux :</label>
      <input type="checkbox" id="symbols">

      <button class="button" type="submit">Générer Mot de Passe</button>
    </form>
  </div>

  <h1>PandaPass</h1>
  <?php foreach ($users as $user): ?>
    <div class="card">
      <h2>
        <?php echo $user->getPseudo(); ?>
      </h2>
      <a href="acceuil.php?id=<?php echo $user->getId(); ?>">Voir plus</a>
      <form method="POST" action="acceuil.php">
        <input type="hidden" name="userId" value="<?php echo $user->getId(); ?>">
        <input type="submit" name="like" value="Liker">
      </form>
    </div>
  <?php endforeach; ?>

</body>

</html>
