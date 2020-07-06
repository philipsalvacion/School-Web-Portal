<?php
include "DBconn.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM video_lesson WHERE uploader = $id";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)){
	?>
	<tr>
		<td><?php echo $row['lesson_no'] ?></td>
		<td><?php echo $row['title'] ?></td>
		<td><?php echo $row['subject'] ?></td>
		<td>
			<button class="btn btn-danger btn-block" type="button" name="button" onclick="deleteVideo(<?php echo $row['lesson_no'] ?>)">Delete
			</button>
		</td>
	</tr>
	<?php
}

if(isset($_POST['delete'])){
	$video_no = $_POST['video_no'];
	$sql = "DELETE FROM video_lesson WHERE lesson_no = $video_no";
	mysqli_query($conn, $sql);
}

if(isset($_POST['publish'])){
	$id = $_SESSION['id'];
	$title = $_POST['title'];
	$subject = $_POST['subject'];
	$link_embed = $_POST['embed'];
	$sql = "INSERT INTO `video_lesson`(`title`, `subject`, `embed_code`, `uploader`)
					VALUES ('$title','$subject','$link_embed',$id)";
	mysqli_query($conn, $sql);
}

?>
