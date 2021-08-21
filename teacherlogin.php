<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login Page</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php
    require_once("header.php");
    ?>
    <form action="" method="post">
    <br><br><br>
<h2> Teacher Login Here :</h2>
<br><br><br><br>
<label for="username">Username</label><br><br>
<div class="input-user">
          <input class="input100" type="text" name="un" class="form-control" placeholder="Enter Teacher Username" required><br>
</div>
<br><br>
<label for="password">Password</label><br><br>
<div class="input-user" data-validate="Password">
          <input class="input100" type="password" class="form-control"  name="ps" placeholder="Enter Password" required><br>
          <span class="focus-input100"></span>
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