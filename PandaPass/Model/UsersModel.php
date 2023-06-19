<?php
require_once 'Database.php';
require_once 'Users.php';

class UsersModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function createUser($user)
  {
    $stmt = $this->db->getInstance()->prepare('INSERT INTO user (pseudo,mot_de_passe) VALUES (?, ?)');
    $pseudo = $user->getPseudo();
    $motDePasse = $user->getMotDePasse();
    $stmt->bindParam(1, $pseudo);
    $stmt->bindParam(2, $motDePasse);
    $stmt->execute();
  }

  public function getUserById($id)
  {
    $stmt = $this->db->getInstance()->prepare('SELECT * FROM user WHERE id = ?');
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      return new Users($row['pseudo'], $row['mot_de_passe'], $row['id']);
    } else {
      return null;
    }
  }

  public function getUserByPseudo($pseudo)
  {
    $stmt = $this->db->getInstance()->prepare('SELECT * FROM user WHERE pseudo = ?');
    $stmt->bindParam(1, $pseudo);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
      return new Users($row['pseudo'], $row['mot_de_passe'], $row['id']);
    } else {
      return null;
    }
  }

  public function getUsers()
  {
    $stmt = $this->db->getInstance()->query('SELECT * FROM user');
    $users = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $users[] = new Users($row['pseudo'], $row['mot_de_passe'], $row['id']);
    }
    // var_dump($users);
    return $users;
  }

  public function pseudoExists($pseudo)
  {
    $stmt = $this->db->getInstance()->prepare('SELECT COUNT(*) FROM user WHERE pseudo = ?');
    $stmt->bindParam(1, $pseudo);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count > 0;
  }
}
?>