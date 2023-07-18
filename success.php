<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      position: relative;
    }

    nav {
      position: absolute;
      top: 0;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 10vh;
      background-color: grey;
      display: flex;
      flex-direction: row;
      justify-content: end;
    }

    nav .container {
      width: 300px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .id {
      width: 50px;
      height: 50px;
      background-color: purple;
      border-radius: 50%;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      color: wheat;
      font-size: 2em;
      font-weight: 900;
    }

    a {
      padding-left: 50px;
      text-decoration: none;
      list-style: none;
      font-size: 1.5em;
    }
  </style>
</head>

<body>
  <nav>
    <div class="container">
      <div class="id">M</div>
      <a href="">logout</a>
    </div>
  </nav>
</body>

</html>