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
	
	if(isset($_POST['submit2']))
	{
		if(!empty($_POST['name']) && !empty($_POST['rollno']) && !empty($_POST['dob']) && !empty($_POST['mnumber']) && !empty($_POST['department']) && !empty($_POST['course']) && !empty($_POST['eamil']) && !empty($_POST['password']))
		{
			$name = $_POST['name'];
			$rollno = $_POST['rollno'];
			$dob = $_POST['dob'];
			$mnumber = $_POST['mnumber'];
			$department = $_POST['department'];
			$course = $_POST['course'];
			$email = $_POST['email'];
			$book = '0';
			$password = $_POST['password'];
			
			$query = "insert into student values('$rollno', '$name', '$department', '$dob', '$email', '$course', '$password', '$book', '$mnumber')";
			
			$run = mysqli_query($conn, $query) or die(mysql_error());
			
			if($run)
			{
				echo "Form Submitted Succesfully";
			}
			else
			{
				echo "Form Not Submitted";
			}	
		}
		else
		{
			echo "All fields are Required";
		}
	}
?>
</html>