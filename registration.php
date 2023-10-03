<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
     
	<link rel="stylesheet" href="style.css">
<title>
LDBMS
</title>
<link rel="icon" type="image/x-icon" href="icon1.png">
</head>
<body alink="none" vlink="none">
	<div class="name">
	<table>
	<tr>
	<td><img src="icon1.png" width="200px" height="200px"></td>
	<td><font face="times new roman" size="6" color="white">
	<b>Indian Institute of Information Technology, Design and Manufacturing</b><br>
	<center>IIITDM Kancheepuram</center>
	</td>

	</tr>
	</table>
	</div>
	<br>
	<hr align="center" width="80%" size="2px" color="#214B8C">
	<br>
	
	<div class="main_menu">
	<table align="center" cellpadding="10px" cellspacing="6px">
		<tr>
		
		<td><font face="Times new roman" size="5px" color="#214B8C"><a href="index.html">Home</a>
		<td><font face="Times new roman" size="5px" color="#214B8C">Campus
		<td><font face="Times new roman" size="5px" color="#214B8C">Hostel
		<td><font face="Times new roman" size="5px" color="#214B8C">Academics
		<td><font face="Times new roman" size="5px" color="#214B8C"><a href="login.php">Library</a>
		
		</tr>
		</table>
		</div>
	<br>
	<center><font face="times new roman" size="8px" color="#214B8C">
	<b>Welcome to E-library of IIITDM Kancheepuram</b></font></center>
	<br>
	<hr align="center" width="50%" size="2px" color="#214B8C">
	<br>

	<table align="right" class="home"><tr><td><a href="index.html"><img src="Graphicloads-100-Flat-Home.ico" width="20px" height="20px"></a></td>
			<td><a href="index.html"><font face="times new roman" size="4px" color="#214B8C">Home</font></a></td></tr></table>
		<div class="login">
		<center>
		<table cellspacing="3px" cellpadding="5px" rules="cols">
			<form method="post">
			<tr>
			<td><font face="Times new roman" size="7px" color="white"><center><b>Registration<hr></b></td>
			</tr>
			<tr>
			<td>
				<input type="text" name="rollno" id="rollno" placeholder="Roll No">
			</tr>
			<tr>
			<td>
				<input type="text" name="name" id="name" placeholder="Name">
			</td>
			</tr>
			<tr>
				<td>
					<input type="date" name="dob" id="dob" placeholder="DOB">
				</td>
			</tr>
			<tr>
				<td>
					<input type="int" name="mnumber" id="mnumber" placeholder="Mobile Number">
				</td>
		
			</tr>
			<tr>
			<td>
					<select name="department" placeholder="Department">
					<option value="computer science">CSE</option>
					<option value="Electrical">Electical</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Smart manufacturing">MSM</option>	
				</td>
			</tr>
			<tr>
				<td>
				<select name="course" placeholder="course">
				<option value="b-tech">B-Tech</option>
				<option value="m-tech">M-tech</option>
				<option value="dual degree">Dual Degree</option>
				<option value="Phd">Phd</option>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="email" id="email" placeholder="E-mail">
				</td>
				</tr>
				<tr>
				<td>
					<input type="text" name="password" id="password" placeholder="Create Password">
				</td>
			</tr>
			<tr>
				<td>
					<div class="btn">
					<br>
					<center><input type="submit" name="submit2" value="Register"></center>
				</td>
			</tr>
			<tr>
			<td>
			<br>
			</td>
			</tr>
		</table>
		</center>
		</div>
		<br>
		<hr width="50%" color="grey">
		<br>
		
		<center><font face="Times new roman" color="Red" size="6px">
		<?php
		
		session_start();
		$con=mysqli_connect('localhost', 'root', '');
		mysqli_select_db($con, 'ldbms');
		
		if(isset($_POST['submit2']))
		{	
		
			$rollno = $_POST['rollno'];
			$name = $_POST['name'];
			$dob = $_POST['dob'];
			$dob = $_POST['dob'];
			$mnumber = $_POST['mnumber'];
			$department = $_POST['department'];
			$course = $_POST['course'];
			$email = $_POST['email'];
			$password = $_POST['password'];
		
			$s="select * from student where rollno='$rollno'";
			$result = mysqli_query($con, $s);
			$num = mysqli_num_rows($result);
		
			if($num == 1)
			{
				echo"Roll Number already Registered";
			}
			else
			{
				$sql="insert into student(rollno, name, department, dob, email, course, password, mnumber) values ('$rollno', '$name', '$department', '$dob', '$email', '$course', '$password', '$mnumber')";
				mysqli_query($con, $sql);
				echo"Registration Succesfull";
			}
		}
		?></center></font>
		<hr width="60%">
		
		<center><font face="times new roman" size="5px" color="blue"><b>IF Already Registered </b></font>
		<font face="times new roman" size="5px" color="red"><b><div class="reg"><a href="login.php">&nbsp;Login IN</div></a></b></font></center>
		
	
	
	
	
	<br>
	<hr align="center" width="80%" size="2px" color="#214B8C">
	<br>
	<center>
	<div class="content1">
		<font face="Times new roman" size="3">
		<table cellpadding="5" cellspacing="5">
		<tr>
		<td><ul>
			<li>Placement cell
			<li>Student Counselling cell
			<li>Training center
			<li>Campus Tour
			<li>Event Gallery
			</ul>
		</td>
		<td>
			<ul>
				<li>NIRF</li>
				<li>Academic Calender</li>
				<li>Time Table</li>
				<li>Fees Structure</li>
				<li>Academic Certificates</li>
			</ul>
		</td>
		<td>
			<ul>
				<li>Sitemap
				<li>Matlab Portal
				<li>Moodle LMS link
				<li>Forms
				<li>Institute Mails 
			</ul>
		</td>	
		</tr>
		
		</table>
		</font>
	</div>	
	</center>
	<center>
	<div class="new">
	<table>
	
	<tr>
		
		<td colspan="3"><font face="times new roman" color="white">
		<center>&copy;IIITDM Kancheepuram</center></font></td>
		</font>
	</tr>
	<tr>
	
	<td><font face="times new roman" color="white">&nbsp;ME20B2003&nbsp;</td>
	<td><font face="times new roman" color="white">&nbsp;ME20B2011&nbsp;</td>
	<td><font face="times new roman" color="white">&nbsp;ME20B2019&nbsp;</td>
	
	</tr>
	
	</table></div>
	</center>
</body>
</html>