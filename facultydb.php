<?php
	$name = $_POST['faculty_fname'];
	$desg = $_POST['faculty_desg'];
	$idno = $_POST['faculty_idno'];
	$mail = $_POST['faculty_mail'];
	$dept = $_POST['faculty_dept'];
	$psw = $_POST['faculty_password'];
	if (!empty($name) || !empty($desg) || !empty($idno) || !empty($mail) || !empty($dept) || !empty($psw)) 
	{
		$host = "localhost";
    	$dbUsername = "root";
    	$dbPassword = "";
    	$dbname = "saps";
    	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    	if (mysqli_connect_error()) 
    	{
     		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    	}
    	else 
    	{
     		$SELECT = "SELECT fac_mail From faculty Where fac_mail = ? Limit 1";
     		$INSERT = "INSERT INTO faculty (fac_name, designation, fac_idno, fac_mail, fac_dept, fac_pass) values(?, ?, ?, ?, ?, ?)";
     		//Prepare statement
     		$stmt = $conn->prepare($SELECT);
     		$stmt->bind_param("s", $mail);
     		$stmt->execute();
     		$stmt->bind_result($mail);
     		$stmt->store_result();
     		$rnum = $stmt->num_rows;
     		if ($rnum==0)
     		{
      			$stmt->close();
     			$stmt = $conn->prepare($INSERT);
      			$stmt->bind_param("ssssss", $name, $desg, $idno, $mail, $dept, $psw);
      			$stmt->execute();
      			echo "<script>alert('New record inserted sucessfully');window.location='facultyregister.php' </script>";
     		}
     		else
     		{
     			echo "<script>alert('Someone already register using this email');window.location='facultyregister.php' </script>";
       		}
       		$stmt->close();
     		$conn->close();
    	}
	}
	else
	{
		"<script>alert('All fields are required!');window.location='facultyregister.php' </script>";
		die();
	}
?>