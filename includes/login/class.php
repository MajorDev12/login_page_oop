<?php

class Login extends Dbh
{
  public function getUser($name, $email, $password)
  {
    $sql = "INSERT INTO user_data (name, email, password) VALUES (?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    if (!$stmt->execute([$name, $email, $password])) {
      $stmt = null;
      header("location: index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
}
