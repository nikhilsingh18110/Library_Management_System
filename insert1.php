<!DOCTYPE1 html>
<html>
<?php
	$server = "localhost";
	$username="root";
	$password="";
	$dbname="ldbms";
	
	$conn = mysqli_connect($server, $username, $password, $dbname);
	
	if($conn == false)
	{
		die("Error : Could not connect" . mysqli_connect_error());
	}
	
	$rollno = $_REQUEST['rollno'];
	$name = $_REQUEST['name'];
	$department = $_REQUEST['department'];
	$dob = $_REQUEST['dob'];
	$email = $_REQUEST['email'];
	$course = $_REQUEST['course'];
	$password = $_REQUEST['password'];
	$mnumber = $_REQUEST['mnumber'];
	
	$sql = "insert into student values('$rollno', '$name', '$department', '$dob', '$email', '$course', '$password', '', '$mnumber')";
	
	if(mysqli_query($conn, $sql))
	{
		echo "success";
	}	
?>
</html>