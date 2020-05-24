<?php
include 'DBconn.php';

if(isset($_POST['sched'])){
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM faculty_schedules WHERE faculty_id = $id";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['time']; ?></td>
			<td><?php echo $row['subject_tasks']; ?></td>
			<td><?php echo $row['class_section']; ?></td>
			<td><?php echo $row['room_no']; ?></td>
			<td><?php echo $row['remarks']; ?></td>
		</tr>
		<?php
	}
}
?>
