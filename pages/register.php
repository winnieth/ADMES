<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>Create User</h2>
    </div>
    <form action="register.php" method="post">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" >
        </div>
        <div class="input-group">
            <label>Lastname</label>
            <input type="text" name="lastname">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="Register" class="btn">Register</button>
        </div>
        <!-- <p>Or <a href="login.php">Login</a></p> -->
        
    </form>
</body>
</html>