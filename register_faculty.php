<?php
include "DBconn.php";
session_start();
if(isset($_POST("facultyReg"))){
	$id = $_POST['id'];
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];

	$checkDataQuery = "SELECT * FROM faculty_info WHERE faculty_id = $id AND firstname = '$firstname' AND lastname = '$lastname'";
	$result = mysqli_query($conn, $checkDataQuery);
	$dataFound = mysqli_num_rows($result);
	if($dataFound > 0){
		$_SESSION['faculty_id'] = $id;
		header("Location: facultyPasswordSetup.html");
	}
	// $sql = "INSERT INTO table1 (col1, col2, col3)
	// VALUES ('$facultyid_number', '$faculty_birthday', '$faculty_password')";
	// $conn->query($sql);
	//
	// $sql = "SELECT * from table1 where col1 = '$facultyid_number'";
	// $result = $conn->query($sql);
	// if($result->num_rows > 0){
	// 	$_SESSION['$facultyid_number'] = $facultyid_number;
	// }
}

if(isset($_POST['passwordSetup'])){
	$password = $_POST['password'];

	$insertCredentialsQuery = "INSERT INTO "
}
$conn->close();
?>
