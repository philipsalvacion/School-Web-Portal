<?php
include "DBConn.php";
$sql = "SELECT * FROM video_lesson";
$resultSet = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($resultSet)) {
	?>
	<h6>Lesson #<?php echo $row['lesson_no']; ?>: <?php echo $row['title']; ?></h6>
	<div class="embed-responsive embed-responsive-21by9">
		<?php echo $row['embed_code']; ?>
	</div>
	<hr>
	<?php
}
?>
