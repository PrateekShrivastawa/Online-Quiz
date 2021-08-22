
<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];
$q=mysqli_query($con,"INSERT INTO admin VALUES  ('$email' , '$password' , 'Teacher')");
header("location:$ref?q=Succesfully registered");
?>

<?php
require_once("footer.php");
?>