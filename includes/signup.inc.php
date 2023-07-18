<?php

if (isset($_POST['submit'])) {

  //grabbing data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //instantiate signup classes
  require_once "../config/dbh.php";
  require_once "./class.php";
  require_once "./signup-contr.inc.php";

  $signup = new SignUpContr($name, $email, $password);
  $signup->signupUser();
  //setError();
  header("location: ../pages/index-signup.php?error=none");
  header("location: ../success.php");
}
