<?php

class SignUp extends Dbh
{
  public function setUser($name, $email, $password)
  {
    $sql = "INSERT INTO user_data (name, email, password) VALUES (?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    if (!$stmt->execute([$name, $email, $password])) {
      $stmt = null;
      header("location: ./pages/index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
}
