<?php
include "DBconn.php";

if (isset($_POST["register_btn"])){
	$student_id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$sql = "SELECT * FROM student_profile WHERE student_id = $student_id AND firstname = '$firstname' AND lastname = '$lastname'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		$_SESSION['$student_id'] = $student_id;
		$_SESSION['id'] = $student_id;
		echo "true";
	}else {
		echo "Credentials not found on Registrar's database";
	}
}

if (isset($_POST['passwordSetup'])) {
	$student_id = $_SESSION['$student_id'];
	$password = $_POST['password'];

	$sql = "INSERT INTO student_acc (student_id, password)
					VALUES ('$student_id', sha1('$password'))";
	$conn->query($sql);
	echo "true";
}
$conn->close();
?>
