<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="../Public/js/Generator.js" defer></script>
  <link rel="stylesheet" href="../Public/css/WelcomeStyle.css" />
  <title>Panda Pass</title>
</head>

<body>
  <header>
    <img class="logo" src="../Public/images/logo.png" />
    <nav>
      <ul class="nav__links">
        <li class="about"><a href="#">About</a></li>
        <li class="histoire"><a>Notre histoire</a></li>
        <li class="contact"><a>Contact</a></li>
      </ul>
    </nav>
    <a href="SignIn.php" class="login">Connexion</a>
    <a href="SignUp.php" class="signup">Inscription</a>
  </header>

  <div class="line"></div>
  <div class="container">
    <div class="texte">
      <h1>Découvrez Panda Pass -</h1>
      <p>
        Votre solution ultime pour une génération et<br />
        une gestion sécurisée des mots de passe !
      </p>
      <p>
        Inscrivez-vous dès maintenant pour enregistrer<br />
        et gérér vos mots de passe.
      </p>
      <a href="SignUp.php" class="signup2">Inscription</a>
    </div>
    <div class="generateur">
      <h1 class="title">Essayer notre générateur de Mots de Passe :</h1>
      <h3 class="displayPwd" id="displayPwd">Mot de Passe</h3>
      <form id="generatorForm" class="form">
        <label for="characterAmountNumber">Nombre de caractères :</label>
        <div class="characterAmount">
          <input type="range" min="1" max="50" value="8" id="characterAmountRange" />
          <input class="number" type="number" min="8" max="50" value="8" id="characterAmountNumber" />
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

  <div class="texte2">
    <h2>
      Résistez aux piratages informatiques <br />
      grâce à Panda Pass
    </h2>
    <p>
      Générez des mots de passe forts et personnalisables <br />
      avec notre générateur Panda Pass, et stocker les <br />
      en toute sécurité dans son gestionnaire intégré<br />
    </p>
  </div>

  <footer>
    <div class="footerContent">
      <h2>Panda Pass</h2>
    </div>
    <div class="footerBottom">
      <p>
        copyright &copy;2023 Panda Pass. Fait par
        <span>Denisa Dudas & Camillia Hammou</span>
      </p>
    </div>
  </footer>

</body>

</html>