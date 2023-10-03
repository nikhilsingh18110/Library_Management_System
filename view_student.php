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
	
	<?php
		$con=mysqli_connect('localhost', 'root', '');
		mysqli_select_db($con, 'ldbms');
		$sql = "select rollno, name, department, dob, email, course, books, mnumber from student";
		$result=mysqli_query($con, $sql);
	?>

	<div class="view_student">
	<center>
	<table cellspacing="5px" cellpadding="3px" rules="cols" frame="hsides">
	<tr>
	<td colspan="8"><center><font face="Algerian" size="6px" color="white"><b>Students Registered For The Library</b><hr width="75%"></center></td>
	</tr>
	<tr bgcolor="#214B8C" class="row1">
	<th><font face="times new roman" size="5px" color="white">Roll No</th>
	<th><font face="times new roman" size="5px" color="white">Name</th>
	<th><font face="times new roman" size="5px" color="white">Department</th>
	<th><font face="times new roman" size="5px" color="white">D.O.B</th>
	<th><font face="times new roman" size="5px" color="white">Email</th>
	<th><font face="times new roman" size="5px" color="white">Course</th>
	<th><font face="times new roman" size="5px" color="white">Books</th>
	<th><font face="times new roman" size="5px" color="white">Contact</th>
	</tr>
	
		
	<?php
		while($rows=mysqli_fetch_array($result))
		{
	?>
	<tr>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['rollno']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['name']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['department']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['dob']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['email']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['course']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['books']; ?></td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['mnumber']; ?></td>
	</tr>
	<?php
		}
	?>
	
	</table>
	</center>
	</div>
	
	
	
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