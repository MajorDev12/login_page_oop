<?php

class LoginContr extends Login
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


  public function loginUser()
  {
    // if ($this->emptyInput() == false) {
    //   header('location: index.php?error=emptyinput');
    //   exit();
    // }
    // if ($this->invaliduid() == false) {
    //   header('location: index.php?error=invalid user name');
    //   exit();
    // }
    // if ($this->invalidemail() == false) {
    //   header('location: index.php?error=invalid email');
    //   exit();
    // }
    // if ($this->pwdCheck() == false) {
    //   header('location: index.php?error=weakpassword');
    //   exit();
    // } 
    $this->getUser($this->name, $this->email, $this->password);
  }

  // //checking empty inputs
  // private function emptyInput($name, $email, $password)
  // {
  //   if (empty($this->name)  || empty($this->email) || empty($this->password)) {
  //     $result = true;
  //   } else {
  //     $result = false;
  //   }
  //   return $result;
  // }

  // //checking empty inputs
  // private function invaliduid($name)
  // {
  //   if (empty($this->name)) {
  //     $result = true;
  //   } else {
  //     $result = false;
  //   }
  //   return $result;
  // }

  // //checking empty inputs
  // private function invalidemail($email)
  // {
  //   if (empty($this->email)) {
  //     $result = true;
  //   } else {
  //     $result = false;
  //   }
  //   return $result;
  // }

  // //checking empty inputs
  // private function pwdCheck($password)
  // {
  //   if (empty($this->password)) {
  //     $result = true;
  //   } else {
  //     $result = false;
  //   }
  //   return $result;
  // }
}
