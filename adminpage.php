<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Profile Page</title>
		<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="admin_mod_css.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<div class="logo">
			<img src="images/logo.png" height="82px" width="100%">
		</div>
		<div class="line1">
			|<br>
			|<br>
			|<br>
			|
		</div>
		<div class="clgname">
			<b>SVECW</b><br>
			Shri Vishnu Engineering College for Women
		</div>
		<div class="line2">
			|<br>
			|<br>
			|<br>
			|
		</div>
		<div class="projectname">
			Student Attendance Permission System
		</div>
		<div class="sapslogo">
			<img src="images/SAPSlogo.png" width="100%" height="70px">
		</div>
	</div>
	<div class="nav">
		<ul>
			<li><a href="adminpage.php"><i class="fa fa-user"></i> Profile</a></li>
			<li><a href="adminstudents.php"><i class="fa fa-users"></i>Students</a></li>
			<li><a href="adminfaculty.php"><i class="fa fa-users"></i>Faculty</a></li>
			<li><a style="color: red;" href="adminlogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>	
		</ul>
	</div>	
	<div class="admin_profile" align="center">
		<div class="profile_img" align="center">
			<img src="images/profile.png" height="100px" width="100px" alt="profileimg">
		</div>
		<h1>Hello
		<?php 
			echo " ".$_SESSION['User_name'];
		?>
		</h1>
		<h3><u>Number of Students:</u> &nbsp <b>
		<?php
			error_reporting(0);
			$query = "select * from student";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			echo $total;  
		?></b>
		</h3>
		<h3><u>Number of Faculty:</u> &nbsp <b>
		<?php
			error_reporting(0);
			$query = "select * from faculty";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			echo $total;  
		?></b>
		</h3>
	</div>
	<center>
		<h2>Search for Faculty Member</h2>
		<div class="faculty_search">
			<form action="" method="POST">
				<input type="text" name="id" placeholder="Enter Id/Name" class="btn"> 
				<input type="submit" name="fac_search" class="btn" value="Search">
			</form>
			<table>
				<tr>
					<th>Id Number</th>
					<th>Faculty Name</th>
					<th>Designation</th>
					<th>Email Id</th>
					<th>Department</th>
					<th>Password</th>
				</tr> <br>
				<?php 
					$db = mysqli_select_db($conn,'saps');
					if(isset($_POST['fac_search']))
					{
						$fac_id = $_POST['id'];
						$query = "select * from faculty where fac_idno ='$fac_id' or fac_name='$fac_id' ";
						$query_run = mysqli_query($conn,$query);

						while ($row = mysqli_fetch_array($query_run)) 
						{
						?>
							<tr align="center">
								<td><?php echo $row['fac_idno']; ?></td>
								<td><?php echo $row['fac_name']; ?></td>
								<td><?php echo $row['designation']; ?></td>
								<td><?php echo $row['fac_mail']; ?></td>
								<td><?php echo $row['fac_dept']; ?></td>
								<td><?php echo $row['fac_pass']; ?></td>
							</tr>
						<?php 
						}
					}
				?>
			</table>
		</div>
	</center>
	<center>
		<h2>Search for Single Student</h2>
		<div class="faculty_search">
			<form action="" method="POST">
				<input type="text" name="std_id" placeholder="Enter RegdNo/Name" class="btn"> 
				<input type="submit" name="std_search" class="btn" value="Search">
			</form>
			<table>
				<tr>
					<th>Id Number</th>
					<th>Faculty Name</th>
					<th>Designation</th>
					<th>Email Id</th>
					<th>Department</th>
					<th>Phone No</th>
					<th>Password</th>
				</tr> <br>
				<?php 
					$db = mysqli_select_db($conn,'saps');
					if(isset($_POST['std_search']))
					{
						$fac_id = $_POST['std_id'];
						$query = "select * from student where fname ='$fac_id' or regdno='$fac_id' ";
						$query_run = mysqli_query($conn,$query);

						while ($row = mysqli_fetch_array($query_run)) 
						{
						?>
							<tr align="center">
								<td><?php echo $row['regdno']; ?></td>
								<td><?php echo $row['fname']; ?></td>
								<td><?php echo $row['lname']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['dept']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['password']; ?></td>
							</tr>
						<?php 
						}
					}
				?>
			</table>
		</div>
	</center>
	<br><br>
	</body>
</html>