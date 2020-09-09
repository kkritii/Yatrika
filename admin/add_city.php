
<?php
	
if (isset($_POST['add_city'])) {
			$c = $_POST['city'];
			$l = $_POST['link1'];
			$li = $_POST['link2'];

			$sql = "INSERT INTO `city` (`city`,`link1`,`link2`) VALUES
			('$c','$l','$li')";
			require_once("DBConnect.php");
	if (mysqli_query($conn, $sql))
	 {
    // echo "New record created successfully.";
		header('Location: list_city.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
<?php include 'includes/header.php';?>
<div>	
	<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >>  Add citys</p>
</div>
<div style="margin-left: 5%;">
<h2>New city</h2>
<form action="" method="POST" name="eventt" enctype="multipart/form-data">
		<table  id="adduser">
			<tr>
				<td> City: </td>
				<td><input type="text" name="city" placeholder="Enter city Name" required="required"></td>
			</tr>
		<tr>
			<td>Link1</td>
			<td> <input type="text" name="link1" required="required" /></td>
			</tr>
			<tr>
			<td>Link2</td>
			<td> <input type="text" name="link2" required="required" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add_city" value="ADD city"></td>
			</tr>
		</table>
	</form>
</div>

<?php include 'includes/footer.php';?>
