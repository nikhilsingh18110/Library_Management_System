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
			<td><font face="Times new roman" size="7px" color="white"><center><b>BOOK ISSUE REQUEST<hr></b></td>
			</tr>
			<tr>
				<td><center>
					<input type="text" name="isbn" id="isbn" placeholder="ISBN">
				</td>
			</tr>
			<tr>
			<td><center>
				<input type="text" name="rollno" id="rollno" placeholder="Roll No">
			</tr>
			<tr>
			<td><center>
				<input type="text" name="name" id="name" placeholder="Name">
			</td>
			</tr>
			
			
			<tr>
				<td>
					<div class="btn">
					<br>
					<center><input type="submit" name="submit2" value="Request"></center>
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
			$isbn = $_POST['isbn'];
			$rollno = $_POST['rollno'];
			$name = $_POST['name'];
			
		
			$s="select books from student where rollno='$rollno'";
			$result = mysqli_query($con, $s);
			$books = mysqli_fetch_assoc($result);
			
			$num = mysqli_num_rows($result);
			
			
			if($books['books'] == 4)
			{
				echo"You Already Issued 4 Books No more Books are allowed to Issue Now.";
			}
			else
			{
				$q="select rollno from student where rollno='$rollno'";
				$result1=mysqli_query($con, $q);
				$num = mysqli_num_rows($result1);
				if ($num==1)
				{
					$sql="insert into issue(isbn, rollno, name) values ('$isbn', '$rollno', '$name')";
					$sql1="update student set books = 'books +1 ' where rollno = '$rollno'";
					mysqli_query($con, $sql);
					mysqli_query($con, $sql1);
					echo"Issue Request Succesfully submitted";
				}
				else
				{
					echo"THIS ROLL NUMBER IS NOT REGISTERED IN THE LIBRARY";
				}
			}
		}
		?></center></font>
		<hr width="60%">
		
		<center>
		<font face="times new roman" size="5px" color="red"><b><div class="reg"><a href="view_book_s.php">&nbsp;Go Back</div></a></b></font></center>
		
	
	
	
	
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