<?php
function setError()
{
  if (isset($_GET["error"])) {
    if (isset($_GET["error"]) == 'emptyInputs') {
      $msg = "Please fill in all fields";
      //exit();
    } elseif (isset($_GET["error"]) == "invalidusername") {
      $msg = "Please enter a valid name";
    } elseif (isset($_GET["error"]) == 'invalidemail') {
      $msg = "Please enter a valid email";
    } elseif (isset($_GET["error"]) == 'weakpassword') {
      $msg = "Password Must be atleast 8 characters";
    } elseif (isset($_GET["error"]) == 'none') {
      $msg = "successfuly signed in";
    } else {
      $msg = '';
    }

    return $msg;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up </title>
  <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
  <div class="header">
    <form action="../includes/signup.inc.php" method="post">
      <h1 class="title">Sign Up</h1>

      <div class="inputs">
        <p class="error"><?php
                          if (isset($_GET["error"])) {
                            echo setError();
                          }
                          ?></p>
        <input type="text" name="name" class="name" placeholder=" Your User Name" autocomplete="off">

        <input type="email" name="email" class="email" placeholder="Email Address" autocomplete="on">

        <input type="password" name="password" class="pass" placeholder="Atleast 8 characters" autocomplete="off">

        <button type="submit" name="submit" class="submit">Submit</button>
        <h5>Already Have an Account? <a href="../pages/index-login.php">Log in</a></h5>
      </div>
    </form>
  </div>
</body>

</html>