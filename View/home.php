<!DOCTYPE html>
<html>
  <head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../Public/css/style_acc.css">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Recherche</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">Mon profil</a>
          <div class="dropdown-content">
            <a href="#">Modifier mon profil</a> 
            <a href="../Public/index.php">Se déconnecter</a>
          </div>
        </li>
      </ul>
    </nav>
    <h1>TheKeyOfHappiness</h1>
    <?php foreach ($users as $user): ?>
      <div class="card">
        <h2><?php echo $user->getPseudo(); ?></h2>
        <a href="acceuil.php?id=<?php echo $user->getId(); ?>">Voir plus</a>
        <form method="POST" action="acceuil.php">
          <input type="hidden" name="userId" value="<?php echo $user->getId(); ?>">
          <input type="submit" name="like" value="Liker">
        </form>
      </div>
    <?php endforeach; ?>
  </body>
</html>
