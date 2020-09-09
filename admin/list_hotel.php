<?php
$conn = mysqli_connect("localhost","root", "", "visitnepal");
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `hotel` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
?>
<?php include 'includes/header.php';?>
<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; List_hotel</p>
<div class="content">
	<h2>List of hotels</h2>
	<a href="add_hotel.php"><img src="images/add.png" style=" margin-left: 300px;" height="30px"></a> 

	<form action="" method="POST" name="hotele" enctype="multipart/form-data">
		<table border="1" cellspacing="0" cellpadding
		="20" width="100%">
		<tr>
			<th>Id</th>
			<th>City</th>
			<th>Hotel</th>
			<th>Image</th>
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
					<td><?= $row["hotel"];?></td>
					<td style="text-align: center;"><img style="width: 80px; border: 1px solid #eee;" src="files/<?= $row["image_hotel"];?>" alt="Thumb"></td>
					<td><a style="color: #F00;" onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_hotel.php?id=<?= $row['id'];?>">&#10008;</a></td>
				</tr>
				<?php
			}	
		} else {
			?>
			<tr>
				<td colspan="5">No Record(s) found.</td>
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