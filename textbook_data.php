<?php
include "DBConn.php";
if (isset($_POST['IsSearchBarEmpty'])) {
	$search = $_POST['search'];
	$category = $_POST['category'];
	$sql = "SELECT * FROM textbook WHERE $category LIKE '$search%'";
	$resultSet = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($resultSet)) {
		?>
		<tr class="center-text">
			<td><?php echo $row['Textbook_no']; ?></td>
			<td><?php echo $row['Title']; ?></td>
			<td><?php echo $row['Author']; ?></td>
			<td><?php echo $row['Classification']; ?></td>
			<td>
				<a href="../PDF/<?php echo $row['File_Name']; ?>" target="_blank">
					<button class="btn btn-primary" type="button" name="button">View</button>
				</a>
			</td>
		</tr>
		<?php
	}
}
else {
	$sql = "SELECT * FROM textbook";
	$resultSet = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($resultSet)) {
		?>
		<tr class="center-text">
			<td><?php echo $row['Textbook_no']; ?></td>
			<td><?php echo $row['Title']; ?></td>
			<td><?php echo $row['Author']; ?></td>
			<td><?php echo $row['Classification']; ?></td>
			<td>
				<a href="PDF/<?php echo $row['File_Name']; ?>">
					<button class="btn btn-primary" type="button" name="button">View</button>
				</a>
			</td>
		</tr>
		<?php
	}
}
?>
