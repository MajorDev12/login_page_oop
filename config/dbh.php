<?php

class Dbh
{
  private $host = "localhost";
  private $user = "root";
  private $password = "123456";
  private $dbName = "users";

  protected function connect()
  {
    try {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->user, $this->password);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $pdo;
      echo "success";
    } catch (PDOException $e) {
      echo "error";
      print "Error!:" . $e->getMessage() . "<br/>";
    }
  }
}
