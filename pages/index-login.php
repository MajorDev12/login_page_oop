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
    <form action="login.inc.php" method="post">
      <h1 class="title">Login</h1>

      <div class="inputs">
        <div class="error"></div>
        <input type="text" name="name" class="name" placeholder="User Name or email" autocomplete="off">

        <input type="password" name="password" class="pass" placeholder="Password" autocomplete="off">

        <button type="submit" name="submit" class="submit">Submit</button>
        <h5>Dont Have an Account? <a href="../pages/index-signup.php">Create here</a></h5>
      </div>
    </form>
  </div>
</body>

</html>