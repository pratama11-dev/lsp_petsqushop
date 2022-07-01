<?php

  require 'db.php';

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $username;
      $_SESSION['status'] = "login";
      header("Location: index.php");
    } else {
      echo "
        <script>
          alert('Username atau Password Salah!');
        </script>
      ";
    }
  }


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Login</title>
</head>

<body>
    <h2>Login Form</h2>

    <form action="" method="post">

        <div class="container">
            <label for="user"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required />

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required />

            <button type="submit" name="login">Login</button>
            <!-- <label> <input type="checkbox" checked="checked" name="remember" /> Remember me </label> -->
        </div>

        <div class="container" style="background-color: #f1f1f1">
            <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Back</button>
            <span class="psw">Forgot <a href="forgotpw.php">password?</a></span>
        </div>
    </form>

</body>

</html>
