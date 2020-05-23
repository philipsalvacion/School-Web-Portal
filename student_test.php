<?php
include "DBConn.php";
$sql = "SELECT * FROM quizzes";
$resultSet = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($resultSet)) {
	?>
	<tr>
		<td><?php echo $row['test_no']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['remarks']; ?></td>
		<td>
			<a href="<?php echo $row['link_embed']; ?>">
				<button class="btn btn-primary" type="button" name="button">Take</button>
			</a>
		</td>
	</tr>
	<?php
}
?>
