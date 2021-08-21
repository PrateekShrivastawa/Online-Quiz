<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Head DeshBoard </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body  style="background:#eff0da;">
<div class="header" style="background-color:black">
<div class="row">

</div>
<?php
 include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:index.php");
}
else
{
$name = $_SESSION['name'];
include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="Admindash.php" class="log log1">'.$email.'</a>&nbsp;|&nbsp;<a href="logout.php?q=Admindash.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
<!-- admin start-->
<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Admindash.php?q=0"><b>Dashboard - head</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="Admindash.php?q=0">Home</a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="Admindash.php?q=1">Students</a></li>
		<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="Admindash.php?q=2">Ranking</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Admindash.php?q=4">Add Teacher</a></li>
            <li><a href="Admindash.php?q=5">Remove Teacher</a></li>
          </ul>
        </li>
      </ul> 
          </div>
  </div>
</nav>
<!--navigation menu closed-->

<div class="row">
<div class="col-md-12">
<!--home start-->

<?php if(@$_GET['q']==0) {
$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>positive</b></td><td>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
	$eid = $row['eid'];
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$sahi.'</td>
	</tr>';
}
$c=0;
// echo '</table></div>';
}
?>
<!--users start-->

<?php if(@$_GET['q']==1) {
$result = mysqli_query($con,"SELECT * FROM user") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td><b>Delete</b></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$mob = $row['mob'];
	$gender = $row['gender'];
    $email = $row['email'];
	$college = $row['college'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td><td>'.$mob.'</td>
	<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
// echo '</table></div>';
}?>
<!--user end-->

<!-- ranking start -->
<?php if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr ><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div>';}

?>
<!-- ranking end -->

<?php
if(@$_GET['q']==4) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Teacher Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="signadmin.php?q=headdash.php?q=4"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="email" name="email" placeholder="Enter Teacher Email" class="form-control input-md" type="email" required >
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="password" name="password" placeholder="Enter password" class="form-control input-md" type="password" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
}
?>
<!--add Teacher end-->

<!--Teacher remove function start-->
<?php if(@$_GET['q']==5) {

$result = mysqli_query($con,"SELECT * FROM admin where role ='Teacher' ") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>Email</b></td><td><b>Delete</b></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
  
    $email = $row['email'];
  

  echo '<tr><td>'.$email.'</td>
  <td><a title="Delete User" href="update.php?demail1='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div>';

}?>
<!--teacher remove function end-->

</body>
</html>
<?php
require_once("footer.php");
?>
