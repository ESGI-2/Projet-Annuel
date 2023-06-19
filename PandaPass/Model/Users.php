<?php
class Users
{
  private $id;
  private $pseudo;
  private $mot_de_passe;

  public function __construct($pseudo, $mot_de_passe, $id = null)
  {
    $this->id = $id;
    $this->pseudo = $pseudo;
    $this->mot_de_passe = $mot_de_passe;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getPseudo()
  {
    return $this->pseudo;
  }

  public function getMotDePasse()
  {
    return $this->mot_de_passe;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setPseudo($pseudo)
  {
    $this->pseudo = $pseudo;
  }

  public function setMotDePasse($mot_de_passe)
  {
    $this->mot_de_passe = $mot_de_passe;
  }
}
?>