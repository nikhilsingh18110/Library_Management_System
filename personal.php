
<?php 
session_start();

if (isset($_SESSION['password']) && isset($_SESSION['rollno'])) 
{
	$roll=$_SESSION['rollno'];

 ?>

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
	<td><img src="icon1.png" widtd="200px" height="200px"></td>
	<td><font face="times new roman" size="6" color="white">
	<b>Indian Institute of Information Technology, Design and Manufacturing</b><br>
	<center>IIITDM Kancheepuram</center>
	</td>

	</tr>
	</table>
	</div>
	<br>
	<hr align="center" widtd="80%" size="2px" color="#214B8C">
	<br>
	
	<?php
		$con=mysqli_connect('localhost', 'root', '');
		mysqli_select_db($con, 'ldbms');
		$sql = "select rollno, name, department, dob, email, course, books, mnumber from student where rollno='$roll'";
		$result=mysqli_query($con, $sql);
	?>
	
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
	<hr align="center" widtd="50%" size="2px" color="#214B8C">
	<br>

	<div class="view_book">
	<center>
	<table cellspacing="5px" cellpadding="3px" rules="cols" frame="hsides">
	<tr>
	<td colspan="7"><center><font face="Algerian" size="6px" color="white"><b>PERSONAL DETAILS</b><hr widtd="75%"></center></td>
	</tr>
	
	<?php
		while($rows=mysqli_fetch_array($result))
		{
	?>
	
	<tr bgcolor="#214B8C" class="row1">
	<td><font face="times new roman" size="5px" color="white">Roll No</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['rollno']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">Name</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['name']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">Department</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['department']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">D.O.B</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['dob']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">Email</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['email']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">Course</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['course']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">Books</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['books']; ?></td>
	</tr>
	<tr>
	<td><font face="times new roman" size="5px" color="white">Contact</td>
	<td><center><font face="times new roman" size="5px" color="white"><?php echo $rows['mnumber']; ?></td>
	</tr>
	
	<?php
		}
	?>
	
	</table>
	</center>
	</div>
	
	
	<br>
	<center>
		<font face="times new roman" size="5px" color="red"><b><div class="reg"><a href="student.php">&nbsp;Go Back</div></a></b></font></center>
	
	<br>
	<hr align="center" widtd="80%" size="2px" color="#214B8C">
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

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>