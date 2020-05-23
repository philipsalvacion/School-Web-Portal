<?php
include "DBConn.php";
$id = $_SESSION['id'];
$qtr = $_POST['qtr'];
$sql = "SELECT * FROM student_grade WHERE student_id = $id AND quarter = '$qtr'";
$resultSet = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($resultSet)) {
	?>
	<tr class="center-text">
		<td style="text-align: left;"><?php echo $row['subject']; ?></td>
		<td><?php echo $row['grade']; ?></td>
		<td><?php echo $row['teacher']; ?></td>
		<td><?php echo $row['remarks']; ?></td>
	</tr>
	<?php
}
?>
