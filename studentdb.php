<?php
$first_name = $_POST['student_fname'];
$last_name = $_POST['student_lname'];
$regd_no = $_POST['student_rgno'];
$email = $_POST['student_mail'];
$dept = $_POST['student_dept'];
$phno = $_POST['student_phone'];
$password = $_POST['student_password'];
if (!empty($first_name) || !empty($last_name) || !empty($regd_no) || !empty($email) || !empty($dept) || !empty($phno) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "saps";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else {
     $SELECT = "SELECT email From student Where email = ? Limit 1";
     $INSERT = "INSERT INTO student (fname, lname, regdno, email, dept, phone, password) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $first_name, $last_name, $regd_no, $email, $dept, $phno, $password);
      $stmt->execute();
      echo "<script>alert('New record inserted sucessfully');window.location='studentregister.php' </script>";
     } 
     else {
     	echo "<script>alert('Someone already register using this email');window.location='studentregister.php' </script>";
       }
     $stmt->close();
     $conn->close();
    }
} else {
	"<script>alert('All fields are required!');window.location='studentregister.php' </script>";
 die();
}
?>