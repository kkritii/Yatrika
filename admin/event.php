<?php
$conn = mysqli_connect("localhost","root", "", "visitnepal");
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `event` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
?>
<?php include 'includes/header.php';?>
<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; List_event</p>
<div class="content">
	<h1>Event List</h1>
	<a href="add_event.php"><img src="images/add.png" style=" margin-left: 300px;" height="30px"></a> 
	<table border="1" cellspacing="0" cellpadding="20" width="100%">
		<tr>
			<th>Id</th>
			<th>Event</th>
			<th>Description</th>
			<th>Image</th>
		</tr>
		<?php
		if (mysqli_num_rows($result) > 0) 
		{
			$i=0;
			while($row = mysqli_fetch_assoc($result)) 
			{ ?>
				<tr>
					<td><?= ++$i;?></td>
					<td><?= $row["event"];?></td>
					<td><?= $row["description"];?></td>
					<td style="text-align: center;"><img style="width: 80px; border: 1px solid #eee;" src="files/<?= $row["image"];?>" alt="Thumb"></td>
					<td><a style="color: #F00;" onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_event.php?id=<?= $row['id'];?>">&#10008;</a></td>
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