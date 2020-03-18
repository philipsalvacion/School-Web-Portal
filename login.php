<?php
include 'DBConn.php';
//================== FACULTY ===================
if(isset($_POST['facultyLogin'])){
	$id = $_POST['id'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM faculty_acc WHERE faculty_id=$id AND password='$password'";
	$result = mysqli_query($conn, $sql);
	// echo $password;
	$acc = mysqli_num_rows($result);
	if ($acc > 0) {
		$_SESSION['id'] = $id;
		echo "true";
	}
	else{
		echo "Invalid credentials";
	}
}

// ======== LOGOUT ==========
if(isset($_POST['logout'])){
	unset($_SESSION['id']);
}

//================== STUDENT ===================
if(isset($_POST['studentLogin'])){
	$id = $_POST['id'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM student_acc WHERE student_id = $id AND password = sha1('$password')";
	$result = mysqli_query($conn, $sql);
	// echo $password;
	$acc = mysqli_num_rows($result);
	if ($acc > 0) {
		$_SESSION['id'] = $id;
		echo "true";
	}
	else{
		echo "Invalid credentials";
	}
}

if(isset($_POST['logout'])){
	unset($_SESSION['id']);
}
?>
