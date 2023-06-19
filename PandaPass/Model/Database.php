<?php

class Database
{
  private $pdo;

  public function __construct()
  {
    $host = 'localhost';
    $db = 'TheKeyToHappiness';
    $user = 'root';
    $password = '';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $this->pdo = new PDO($dsn, $user, $password, $options);
    // echo "test";
  }

  public function getInstance()
  {
    return $this->pdo;
  }
}

?>