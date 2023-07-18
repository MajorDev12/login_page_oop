<?php

if (isset($_POST['submit'])) {
  echo "ddd";

  //grabbing data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //instantiate signup classes
  require_once "../config/dbh.php";
  require_once "../includes/login/class.php";
  require_once "../includes/login/login-contr.inc.php";
  $signup = new SignUpContr($name, $email, $password);

  $signup->signupUser();
  header("location: ../pages/index.php?error=none");
}
