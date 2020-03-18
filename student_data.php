<?php
include "DBConn.php";
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
else {
	$wew = $_POST['studentName'];
	echo "False";
}
?>
