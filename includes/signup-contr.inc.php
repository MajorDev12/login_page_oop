<?php

class SignUpContr extends SignUp
{
  //construct fields
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function signupUser()
  {
    if ($this->emptyInput() !== false) {
      header('location: ../pages/index-signup.php?error=emptyInputs');
      exit();
    }
    if ($this->invaliduid() !== false) {
      header('location: ../pages/index-signup.php?error=invalidusername');
      exit();
    }
    if ($this->invalidemail() !== false) {
      header('location: ../pages/index-signup.php?error=invalidemail');
      exit();
    }
    if ($this->pwdCheck() !== false) {
      header('location: ../pages/index-signup.php?error=weakpassword');
      exit();
    }
    $this->setUser($this->name, $this->email, $this->password);
  }


  //checking empty inputs
  private function emptyInput()
  {
    if (empty($this->name)  || empty($this->email) || empty($this->password)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  private function invaliduid()
  {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // validating user email
  private function invalidemail()
  {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  //password validation
  private function pwdCheck()
  {
    if (!strlen($this->password >= 8)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }
}





  // public function setError()
  // {
  //   echo "seterror works";
  //   if (isset($_GET["error"])) {
  //     $msg = "";
  //     $msgCont = "<p class='error'>.$msg.</p>";
  //     if (isset($_GET["error"]) == 'emptyInput') {
  //       $msg = "Please fill in all fields";
  //       echo $msgCont;
  //       exit();
  //     }
  //     if (isset($_GET["error"]) == 'invalidname') {
  //       $msg = "Please enter a valid name";
  //       echo $msgCont;
  //       exit();
  //     }
  //     if (isset($_GET["error"]) == 'invalidemail') {
  //       $msg = "Please enter a valid email";
  //       echo $msgCont;
  //       exit();
  //     }
  //     if (isset($_GET["error"]) == 'invalidpswd') {
  //       $msg = "Must be atleast 8 characters";
  //       echo $msgCont;
  //       exit();
  //     }
  //     if (isset($_GET["error"]) == 'none') {
  //       $msg = "successfuly signed in";
  //       echo $msgCont;
  //       $this->setUser($this->name, $this->email, $this->password);
  //       header('location: ../pages/index-login.php');
  //     }
  //   }
  // }