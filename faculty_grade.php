<?php
include "DBConn.php";

if(isset($_POST['refresh'])){
	$id = $_SESSION['id'];
	$selectStudentProfile = "SELECT * FROM student_profile WHERE section = '7 - Mabini'";
	$studentProfileSet = mysqli_query($conn, $selectStudentProfile);

	$selectStudentGrade = "SELECT * FROM student_grade";
	$studentGrade = mysqli_query($conn, $selectStudentGrade);
	$rowOfStudentGrade = mysqli_fetch_array($studentGrade);

	while ($rowOfStudents = mysqli_fetch_array($studentProfileSet)) {
		?>
		<tr class="center-text">
			<td><?php echo $rowOfStudents['student_id'] ?></td>
			<td><?php echo $rowOfStudents['lastname'] ?></td>
			<td><?php echo $rowOfStudents['firstname'] ?></td>
			<td>
				<!-- Modal trigger button -->
				<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#updateGrade" onclick="openStudentData(<?php echo $rowOfStudents['student_id'] ?>)">
					View
				</button>
			</td>
		</tr>
		<?php
	}
}

if(isset($_POST['search'])){
	$filter = $_POST['fltr'];
	$search = $_POST['search'];
	$selectStudentProfile = "SELECT * FROM student_profile WHERE $filter LIKE '$search%'";
	$studentProfileSet = mysqli_query($conn, $selectStudentProfile);

	$selectStudentGrade = "SELECT * FROM student_grade";
	$studentGrade = mysqli_query($conn, $selectStudentGrade);
	$rowOfStudentGrade = mysqli_fetch_array($studentGrade);

	while ($rowOfStudents = mysqli_fetch_array($studentProfileSet)) {
		?>
		<tr class="center-text">
			<td><?php echo $rowOfStudents['student_id'] ?></td>
			<td><?php echo $rowOfStudents['lastname'] ?></td>
			<td><?php echo $rowOfStudents['firstname'] ?></td>
			<td>
				<!-- Modal trigger button -->
				<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#updateGrade" onclick="openStudentData(<?php echo $rowOfStudents['student_id']; ?>)">
					View
				</button>
			</td>
		</tr>
		<?php
	}
}


if(isset($_POST['getStudentProfile'])){
	$id = $_POST['student_id'];
	$sql = "SELECT * FROM student_grade WHERE student_id = $id";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $row['subject']; ?></td>
			<td style="width: 10%;">
				<input id="<?php echo $row['subject']; ?>" class="form-control" type="number" name="" value="<?php echo $row['grade']; ?>">
			</td>
			<td><?php echo $row['remarks']; ?></td>
			<td>
				<button class="btn btn-success btn-block" type="button" name="button" onclick="updateGrade('<?php echo $row['subject']; ?>',<?php echo $id; ?>)">Update</button>
			</td>
		</tr>
		<?php
	}
}

if(isset($_POST['updateGrade'])){
	$id = $_POST['id'];
	$grade = $_POST['grade'];
	$subject = $_POST['subject'];
	$sql = "UPDATE student_grade SET grade = $grade WHERE subject = '$subject' AND student_id = $id";
	mysqli_query($conn, $sql);
}
?>
