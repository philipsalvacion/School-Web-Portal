<?php
include 'DBconn.php';

if(isset($_POST['test'])){
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM quizzes WHERE uploader = $id";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['test_no']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['remarks']; ?></td>
			<td style="width: 25%;">
				<a href="<?php echo $row['link_embed']; ?>">
					<button class="btn btn-primary" type="button" name="button" style="width: 42%;">View</button>
				</a>
				<button class="btn btn-danger" type="button" name="button" onclick="deleteTest(<?php echo $row['test_no'] ?>)">Delete</button>
			</td>
		</tr>
		<?php
	}
}

if(isset($_POST['delete'])){
	$test_no = $_POST['test_no'];
	$sql = "DELETE FROM quizzes WHERE test_no = $test_no";
	mysqli_query($conn, $sql);
}

if(isset($_POST['publish'])){
	$id = $_SESSION['id'];
	$title = $_POST['title'];
	$remarks = $_POST['remarks'];
	$link_embed = $_POST['embed'];
	$sql = "INSERT INTO `quizzes`(`title`, `remarks`, `link_embed`, `uploader`)
					VALUES ('$title','$remarks','$link_embed',$id)";
	mysqli_query($conn, $sql);
}
?>
