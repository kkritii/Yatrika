<?php
require_once("DBConnect.php");
$sql = "SELECT * FROM `city` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
?>
<?php include 'includes/header.php';?>
<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; List_city</p>
<div class="content">
	<h2>List of citys</h2>
	<a href="add_city.php"><img src="images/add.png" style=" margin-left: 300px;" height="30px"></a> 

	<form action="" method="POST" name="citye" enctype="multipart/form-data">
		<table border="1" cellspacing="0" cellpadding
		="20" width="100%">
		<tr>
			<th>Id</th>
			<th>City</th>
			<th>Link1</th>
			<th>Link2</th>
			<th>Action</th>
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
					<td><?= $row["link1"];?></td>
					<td><?= $row["link2"];?></td>
					
					<td><a style="color: #F00;" onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_city.php?id=<?= $row['id'];?>">&#10008;</a></td>
				</tr>
				<?php
			}	
		} else {
			?>
			<tr>
				<td colspan="4">No Record(s) found.</td>
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