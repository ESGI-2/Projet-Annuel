<?php
require_once 'Database.php';
require_once 'Manager.php';

class ManagerModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function createManager($manager)
  {
    $stmt = $this->db->getInstance()->prepare('INSERT INTO manager (pseudo,identifiant,password,url) VALUES (?, ?, ?, ?)');
    $pseudo = $manager->getPseudo();
    $identifiant = $manager->getIdentifiant();
    $motDePasse = $manager->getMotDePasse();
    $url = $manager->getUrl();
    $stmt->bindParam(1, $pseudo);
    $stmt->bindParam(2, $identifiant);
    $stmt->bindParam(3, $motDePasse);
    $stmt->bindParam(4, $url);
    $stmt->execute();
  }

  public function getManagerById($id)
  {
    $stmt = $this->db->getInstance()->prepare('SELECT * FROM manager WHERE id = ?');
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      return new Manager($row['pseudo'], $row['identifiant'], $row['password'], $row['url'], $row['id']);
    } else {
      return null;
    }
  }

  /*public function getManagerByUrl($pseudo) {
    $stmt = $this->db->getInstance()->prepare('SELECT * FROM user WHERE pseudo = ?');
    $stmt->bindParam(1, $pseudo);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      return new Users($row['pseudo'],$row['mot_de_passe'], $row['id']);
    } else {
      return null;
    }
  }*/

  public function getManager()
  {
    $stmt = $this->db->getInstance()->query('SELECT * FROM manager');
    $manager = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $manager[] = new Manager($row['pseudo'], $row['identifiant'], $row['password'], $row['url'], $row['id']);
    }
    // var_dump($users);
    return $manager;
  }

  public function getManagerByUserId($pseudo)
  {
    // Retrieve the user ID from the session
    $userId = $_SESSION['pseudo'];

    $stmt = $this->db->getInstance()->prepare('SELECT * FROM manager WHERE pseudo = ?');
    $stmt->bindParam(1, $userId);
    $stmt->execute();
    $manager = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $manager[] = new Manager($row['pseudo'], $row['identifiant'], $row['password'], $row['url'], $row['id']);
    }
    return $manager;
  }



  /*public function pseudoExists($pseudo) {
    $stmt = $this->db->getInstance()->prepare('SELECT COUNT(*) FROM manager WHERE pseudo = ?');
    $stmt->bindParam(1, $pseudo);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count > 0;
  }*/
}
?>