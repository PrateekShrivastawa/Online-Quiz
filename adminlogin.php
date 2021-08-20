<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Here</title>
</head>
<body>
    <?php
    require_once("header.php");
    ?>
<form action="adminlogin.php" name="f1" method="POST">
<br><br>
<h2> Head Login Here:</h2>
<br><br><br>
<label for="username">Username</label><br><br>
<div class="input-user">
          <input class="input100" type="email" id="username" name="un" placeholder="Enter Head Username" required><br>
</div>
<br><br>   
<label for="password">Password</label><br><br>
<div class="input-user">
          <input class="input100" type="password" id="password" name="ps" placeholder="Enter Password" required><br>
</div>
<br><br><br>
<div class="input-btn">
          <button class="btn100" type="submit" name="login">
            Sign In
          </button>
        </div>
</form>
</body>
</html>