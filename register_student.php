<?php
include "DBconn.php";

if (isset($_POST("register_btn"))){
	$student_id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$sql = "SELECT * FROM student_profile WHERE student_id = $studid_number AND firstname = '$firstname' AND lastname = '$lastname'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		$_SESSION['$student_id'] = $student_id;
		// This must must be the section that needs to be redirected to other page
		$sql = "INSERT INTO student_acc (student_id, password)
						VALUES ('$student_id', '$stud_birthday')";
		$conn->query($sql);
	}else {
		echo "Credentials not found on registrar's database";
	}
}
$conn->close();
?>
