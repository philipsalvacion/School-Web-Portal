<?php
include "DBConn.php";
if (isset($_POST['IsSearchBarEmpty'])) {
	$search = $_POST['search'];
	$category = $_POST['category'];
	$sql = "SELECT * FROM textbooks WHERE $category LIKE '$search%'";
	$resultSet = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($resultSet)) {
		?>
		<tr class="center-text">
			<td><?php echo $row['ref_no']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
			<td><?php echo $row['classification']; ?></td>
			<td>
				<a href="<?php echo $row['link']; ?>">
					<button class="btn btn-primary" type="button" name="button">View</button>
				</a>
			</td>
		</tr>
		<?php
	}
}
else {
	$sql = "SELECT * FROM textbooks";
	$resultSet = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($resultSet)) {
		?>
		<tr class="center-text">
			<td><?php echo $row['ref_no']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
			<td><?php echo $row['classification']; ?></td>
			<td>
				<a href="<?php echo $row['link']; ?>">
					<button class="btn btn-primary" type="button" name="button">View</button>
				</a>
			</td>
		</tr>
		<?php
	}
}
?>
