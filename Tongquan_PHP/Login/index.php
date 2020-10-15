<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  if ($username === "admin" && $password === "admin") {
    echo "<h2>Welcome<span style='color:red'> " . $username . " </span>to website</h2>";
  } else {
    echo "<script>alert('Login Error') </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    .login {
      height: 180px;
      width: 230px;
      margin: 0;
      padding: 10px;
      border: 1px solid black;
      box-shadow: 2px 3px 3px red;
    }

    .login input {
      padding: 5px;
      margin: 5px;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <div class="login">
      <h2>Login</h2>
      <input type="text" name="username" id="" size="20" placeholder="username" required />
      <input type="password" name="password" id="" size="20" placeholder="password" required />
      <input type="submit" value="Sign in" />
    </div>
  </form>
</body>

</html>