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
    <header>
      <img class="logo" src="../Public/images/logo.png" />
      <nav>
        <ul class="nav__links">
          <li class="home"><a href="#">Home</a></li>
          <li><a href="PrintManager.php">Gestionnaire de mot de passe</a></li>
          <li><a href="MyProfile.php">Mon profil</a></li>
        </ul>
      </nav>
      <a href="../Public/index.php" class="deconnexion">Se déconnecter</a>
    </header>

    <div class="line"></div>
    <div class="container">
      <div class="texte">
        <h1>Générez des mots de passe</h1>
        <p>
          uniques et complexes, sécurisés et personnalisables<br />
          avec notre générateur Panda Pass !
        </p>
      </div>
      <div class="generateur">
        <h1 class="title">Générateur de Mots de Passe :</h1>
        <h3 class="displayPwd" id="displayPwd">Mot de Passe</h3>
        <form id="generatorForm" class="form">
          <label for="characterAmountNumber">Nombre de caractères :</label>
          <div class="characterAmount">
            <input
              type="range"
              min="1"
              max="50"
              value="8"
              id="characterAmountRange"
            />
            <input
              class="number"
              type="number"
              min="8"
              max="50"
              value="8"
              id="characterAmountNumber"
            />
          </div>

          <label for="uppercase">Majuscules :</label>
          <input type="checkbox" id="uppercase" class="ui-checkbox" />

          <label for="numbers">Nombres :</label>
          <input type="checkbox" id="numbers" class="ui-checkbox" />

          <label for="symbols">Caractères spéciaux :</label>
          <input type="checkbox" id="symbols" class="ui-checkbox" />

          <button class="button" type="submit">Générer Mot de Passe</button>
        </form>
      </div>
    </div>

    <div class="texteGestionnaire">
      <h1>Gérez vos mots de passes</h1>
      <p>
        en toute sécurité avec notre gestionnaire Panda Pass.
      </p>
    </div>
    <a href="PrintManager.php" class="buttonGestionnaire"
      >Gestionnaire de mots de passe</a
    >
  </body>
</html>
