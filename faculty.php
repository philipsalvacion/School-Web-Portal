<?php
include 'DBconn.php';

if(isset($_POST["display"])){
  $sql = "SELECT * FROM student_info";
  $result = mysqli_query($conn, $sql);
}
?>
