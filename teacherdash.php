<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dash Board</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
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
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="teacherdash.php" class="log log1">'.$email.'</a>&nbsp;|&nbsp;<a href="logout.php?q=teacherdash.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
<!-- admin start-->
<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="teacherdash.php?q=0"><b>Dashboard - Teacher</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="teacherdash.php?q=0">Home</a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="teacherdash.php?q=1">Scores</a></li>
		<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="teacherdash.php?q=2">Ranking</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="teacherdash.php?q=4">Add Quiz</a></li>
            <li><a href="teacherdash.php?q=5">Remove Quiz</a></li>
          </ul>
        </li>
      </ul> 
          </div>
  </div>
</nav>

<!--home start-->

<?php if(@$_GET['q']==0) {

$result = mysqli_query($con,"SELECT * FROM quiz where email='$email' ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>positive</b></td><td><b>negative</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
  $wrong = $row['wrong'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$sahi.'</td><td>'.$wrong.'</td><td>'.$time.'&nbsp;min</td>
	</tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	</tr>';
}
}
$c=0;
echo '</table></div>';

}
?>

<!-- score details -->
<?php
if(@$_GET['q']== 1) 
{
  $q=mysqli_query($con,"SELECT distinct q.title,u.name,u.college,h.score,h.date from user u,history h,quiz q where q.email='$email' and q.eid=h.eid and h.email=u.email order by q.eid DESC")or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:black"><td><b>S.N.</b></td><td><b>Title</b></td><td><b>Name</b></td><td><b>College</b></td><td><b>Score<b></td><td><b>Date</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$title=$row['title'];
$name=$row['name'];
$college=$row['college'];
$score=$row['score'];
$date=$row['date'];
echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$name.'</td><td>'.$college.'</td><td>'.$score.'</td><td>'.$date.'</td></tr>';
}
echo'</table></div>';
}

?>
</body>
</html>