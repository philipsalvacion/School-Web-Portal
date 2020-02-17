<?php
include "DBconn.php";

if (isset($_POST("register_btn"))){
	$studid_number = $_POST['studid_number'];
	$stud_birthday = $_POST['stud_birthday'];
	$stud_password = $_POST['stud_password'];

	$sql = "INSERT INTO table1 (col1, col2, col3)
		VALUES ('$studid_number', '$stud_birthday', '$stud_password')";
	$conn->query($sql);

	$sql = "SELECT * from table1 where col1 = '$studid_number'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$_SESSION['$studid_number'] = $studid_number;
		}
	}
$conn->close();
?>
