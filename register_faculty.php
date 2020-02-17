<?php
include "DBconn.php";

if (isset($_POST("register_btn"))){
	$facultyid_number = $_POST['facultyid_number'];
	$faculty_birthday = $_POST['faculty_birthday'];
	$faculty_password = $_POST['faculty_password'];

	$sql = "INSERT INTO table1 (col1, col2, col3)
		VALUES ('$facultyid_number', '$faculty_birthday', '$faculty_password')";
	$conn->query($sql);

	$sql = "SELECT * from table1 where col1 = '$facultyid_number'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$_SESSION['$facultyid_number'] = $facultyid_number;
		}
	}
$conn->close();
?>
