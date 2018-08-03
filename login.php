<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action="login.php" method="post">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="input-group">
            <input type="text" name="password" placeholder="Password">
        </div>
        <div class="input-group">
            <button type="submit" name="Login" class="btn">Login</button>
        </div>
    </form>
</body>
</html>