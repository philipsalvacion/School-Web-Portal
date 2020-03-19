<?php
include "DBConn.php";

// Display student data on Frontend
if (isset($_POST['studentName'])) {
	$id = $_SESSION['id'];
	$query = "SELECT * FROM student_profile WHERE student_id = $id";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$data = [
		'firstname' => $row['firstname'],
		'lastname' => $row['lastname'],
		'section' => $row['section']
	];
	header('Content-type: application/json');
	echo json_encode( $data );
}

// Change Password
if (isset($_POST['changePassword'])) {
	$id = $_SESSION['id'];
	$newPassword = $_POST['password'];
	$changePassQuery = "UPDATE (student_acc) SET password = sha1('$newPassword') WHERE student_id = $id";
	mysqli_query($conn, $changePassQuery);
}
?>
