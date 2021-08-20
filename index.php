<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/> 
    <style>
        h1
    {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    body
{
    background : url('images/bg1.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;  
    background-repeat: no-repeat;  
    height:100vh;
    width: 100%;
}
.welcome{
  color:white;
  font-size:94px;
}
    </style>
</head>
<body>
<h1 class="welcome">Welcome All </h1>
<nav class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="container-fluid">
    <div class="navbar-header">  
    <a class="navbar-brand" href="index.php">Online Examination System</a>          
    </div >
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo 'adminlogin.php'; ?>" >HEAD</a></li>   
        <li><a href="<?php echo 'Studentsignin.php'; ?>" >SIGN IN</a></li>
        <li><a href="<?php echo 'studentsignup.php'; ?>" >SIGN UP</a></li>
         <li><a href="<?php echo 'teacherlogin.php'; ?>" >TEACHER</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>