<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','project');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records
$name=$_POST['name'];
$txtEmail = $_POST['email'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `signuptable` (`name`,`email`, `password`) VALUES ( '$name','$txtEmail', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

echo "hello ".$name."    ".$txtEmail."    ".$password;
if($rs)
{
	echo "Contact Records Inserted";
	header("Location: project.html");
}
else 
{
	echo "failed to insert ";
}

?>