<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-SignUp</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
    body{
    margin:0px;
    padding:0px;
    background : url('images/adminback01.jpg'); 
    height:800px
}
h2{
    text-align:center;
    color:white;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    margin-top:-55px;
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
.check1{
    color:white;
    font-size: 20px;
}
.check{
    color:white;
}
</style>
</head>
<body>
<?php
    require_once("header.php");
    ?>
    <form action="studentsignup.php" method="post">
    <br><br><br>

        <h2>Register With Your Details :  </h2>
        <br>
        <label for="username">Full Name </label><br>
        <div class="input-user">
          <input class="input100" type="text" name="name" class="form-control" placeholder="Enter your Name" required><br>
</div>

<br>
<label for="username">Enter your gender </label><br>
  <div class="input-user">
    <select id="gender" name="gender" placeholder="Enter your gender" class="input100" >
   <option value="Male"></option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
  <br>

  <label for="username"> College Name</label><br>
<div class="input-user">
          <input class="input100" type="text" name="college" class="form-control" placeholder="Enter your College" required><br>
</div>
<br>

<div class="form-group">
  <label for="username">Email-ID</label><br>
  <div class="input-user">
    <input id="email" name="email" placeholder="Enter your email-id" class="input100" type="email">
  </div>
  <br>
</div>

<label for="username">Mobile</label><br>
<div class="input-user" data-validate="Username">
          <input class="input100" type="text" name="mob" class="form-control" placeholder="Enter your Mobile number" pattern="[1-9]{1}[0-9]{9}" required><br>
          <span class="focus-input100"></span>
</div>
<br>

<label for="password">Password</label><br>
<div class="input-user" data-validate="Password">
          <input class="input100" type="password" class="form-control"  name="password" placeholder="Enter Password" required><br>
          <span class="focus-input100"></span>
</div>
<br>

<div class="form-group">
  <label for="username">Conform Password</label><br>
  <div class="input-user"data-validate="Password">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="input100" type="password">
  </div>
<br>

<div class="input-btn">
          <button class="btn100" type="submit" name="submit1">
            Register Now
          </button>
        </div>
        
</div>
    </form>
</body>
</html>
<?php
include('dbConnection.php');
if(isset($_POST['submit1'])){
    $email = $_POST['email'];
    $qry="SELECT * FROM `user` WHERE `email`='$email'";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if($row >0){
        ?>
        <script>
        alert('Username Already exits');
        window.open('index.php','_self');
        </script>
    <?php
    }
    else{
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $college = $_POST['college'];
        $email =$_POST['email'];
        $mob = $_POST['mob'];
        $password = $_POST['password'];
        $password = md5($password);
        $query = "INSERT INTO `user`(`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES ('$name','$gender','$college','$email','$mob','$password')";
        $run = mysqli_query($con,$query);
        ?>
        <script>
        alert('Registration Successful');
        window.open('index.php','_self');
        </script>
        <?php
    }

}
?>
<?php
    require_once("footer.php");
    ?>