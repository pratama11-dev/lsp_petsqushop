<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Login</title>
</head>

<body>
    <h2>Login Form</h2>

    <form action="/action_page.php" method="post">

        <div class="container">
            <label for="user"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required />

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required />

            <button type="submit">Login</button>
            <label> <input type="checkbox" checked="checked" name="remember" /> Remember me </label>
        </div>

        <div class="container" style="background-color: #f1f1f1">
            <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Back</button>
            <span class="psw">Forgot <a href="forgotpw.php">password?</a></span>
        </div>
    </form>

</body>

</html>
