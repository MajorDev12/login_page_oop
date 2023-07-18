<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up </title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="header">
    <form action="signup.inc.php" method="post">
      <h1 class="title">Login</h1>

      <div class="inputs">
        <div class="error"></div>
        <input type="text" name="name" class="name" placeholder="User Name or email" autocomplete="off">

        <input type="password" name="password" class="pass" placeholder="Atleast 8 characters" autocomplete="off">

        <button type="submit" name="submit" class="submit">Submit</button>
        <h5>Already Have an Account? <a href="../signup pages/index-signup.php">Log in</a></h5>
      </div>
    </form>
  </div>
</body>

</html>