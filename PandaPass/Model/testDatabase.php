<?php
require_once 'Database.php';

try {
  $db = new Database();
  $pdo = $db->getInstance();
  echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>