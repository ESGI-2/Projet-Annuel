<?php
class Manager {
  private $id;
  private $pseudo;
  private $identifiant;
  private $mot_de_passe;
  private $url;

  public function __construct($pseudo,$identifiant, $mot_de_passe, $url,$id = null) {
    $this->id = $id;
    $this->pseudo = $pseudo;
    $this->identifiant = $identifiant;
    $this->mot_de_passe = $mot_de_passe;
    $this->url = $url;
  }

  public function getId() {
    return $this->id;
  }

  public function getPseudo() {
    return $this->pseudo;
  }
  public function getIdentifiant() {
    return $this->identifiant;
  }
  public function getMotDePasse() {
    return $this->mot_de_passe;
  }

  public function getUrl() {
    return $this->url;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setPseudo($pseudo) {
    $this->pseudo = $pseudo;
  }

  public function setIdentifiant($identifiant) {
    $this->identifiant = $identifiant;
  }
  public function setMotDePasse($mot_de_passe) {
    $this->mot_de_passe = $mot_de_passe;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
}
?>