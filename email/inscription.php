<?php
class User {
  private $email;
  private $nom;
  private $prenom;
  private $age;

  public function __construct($email, $nom, $prenom, $age) {
    $this->email = $email;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  }

  public function isValid() {
    $email_regex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if (!preg_match($email_regex, $this->email)) {
      return false;
    }
    if (empty($this->nom) || empty($this->prenom)) {
      return false;
    }
    if ($this->age < 13) {
      return false;
    }
    return true;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getAge() {
    return $this->age;
  }

  public function displaySuccessMessage() {
    if ($this->isValid()) {
      echo '<div class="alert alert-success" role="alert">Inscription réussie !</div>';
    }
  }
}
?>
