<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Here</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
    body{
    margin:0px;
    padding:0px;
    background-image: url('images/adminback01.jpg');
}
h2{
    text-align:center;
    color:white;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    margin-left: -125px;
}
label{
    display:block;
    text-align:center; 
    line-height: 7%;
    font-size: .85em;
    margin-left:-313px;
    font-size:18px;
    color:white;
}
.input-user{
    text-align:center;
}
.input100{
    text-align:center;
    border-radius: 18px;
    width: 408px;
    height: 32px;
}
.input-btn{
    text-align:center;
}
.btn100{
    border-radius: 34px;
    width: 209px;
    height: 40px;
}
.btn100:hover{
    background-color:brown;
}
</style>
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