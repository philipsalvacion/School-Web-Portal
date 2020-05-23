<?php
include "DBconn.php";

if (isset($_POST["register_btn"])){
	$faculty_id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$sql = "SELECT * FROM faculty_profile WHERE faculty_id = $faculty_id AND firstname = '$firstname' AND lastname = '$lastname'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		$_SESSION['$faculty_id'] = $faculty_id;
		$_SESSION['id'] = $faculty_id;
		echo "true";
	}else {
		echo "Credentials not found on Management's database";
	}
}

if (isset($_POST['passwordSetup'])) {
	$faculty_id = $_SESSION['$faculty_id'];
	$password = $_POST['password'];

	$sql = "INSERT INTO faculty_acc (faculty_id, password)
					VALUES ('$faculty_id', sha1('$password'))";
	$conn->query($sql);
	echo "true";
}
$conn->close();
?>
