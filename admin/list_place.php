<?php
require_once("DBConnect.php");

$sql = "SELECT * FROM `place` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
?>
<?php include 'includes/header.php';?>
<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; List_place</p>
<div class="content">
	<h2>List of Places</h2>
	<a href="add_place.php"><img src="images/add.png" style=" margin-left: 300px;" height="30px"></a> 

	<form action="" method="POST" name="placee" enctype="multipart/form-data">
		<table border="1" cellspacing="0" cellpadding
		="20" width="100%">
		<tr>
			<th>Id</th>
			<th>City</th>
			<th>Place</th>
			<th>Description</th>
			<th>Image</th>
		</tr>
		<?php
		if (mysqli_num_rows($result) > 0) {

			$i=0;
			while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";

				?>
				<tr>
					<td><?= ++$i;?></td>
					<td><?= $row["city"];?></td>
					<td><?= $row["place"];?></td>
					<td><?= $row["description_place"];?></td>
					<td style="text-align: center;"><img style="width: 80px; border: 1px solid #eee;" src="../files/<?= $row["image_place"];?>" alt="Thumb"></td>
					<td><a style="color: #F00;" onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_place.php?id=<?= $row['id'];?>">&#10008;</a></td>
				</tr>
				<?php
			}	
		} else {
			?>
			<tr>
				<td colspan="3">No Record(s) found.</td>
			</tr>
			<?php
		}
		?>
		<?php 
		mysqli_close($conn);
		?>
	</table>
</div>
<?php include 'includes/footer.php';?>