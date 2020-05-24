<?php
include "DBConn.php";
$_POST['facultyName'] = "wew";
// Display faculty data on Frontend
if (isset($_POST['facultyName'])) {
	$id = $_SESSION['id'];
	$query = "SELECT * FROM faculty_profile WHERE faculty_id = $id";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$data = [
		'firstname' => $row['firstname'],
		'lastname' => $row['lastname'],
		'dept' => $row['faculty']
	];
	header('Content-type: application/json');
	echo json_encode( $data );
}

// Change Password
if (isset($_POST['changePassword'])) {
	$id = $_SESSION['id'];
	$newPassword = $_POST['password'];
	$changePassQuery = "UPDATE (faculty_acc) SET password = sha1('$newPassword') WHERE faculty_id = $id";
	mysqli_query($conn, $changePassQuery);
}
?>
