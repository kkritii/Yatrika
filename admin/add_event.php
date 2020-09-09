
<?php

if (isset($_POST['add_event'])) {
	error_reporting(0);
	if(isset($_FILES['image'])){
      // echo "<pre>";print_r($_FILES['image']);exit;
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

		$extensions= array("jpeg","jpg","png");

		if(in_array($file_ext,$extensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size > 2097152){
			$errors[]='File size must be less than or equal to 2 MB';
		}

		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"files/".$file_name);
			$e = $_POST['event'];

			$d = $_POST['description'];

			$sql = "INSERT INTO `event` (`event`, `description`,`image`) VALUES
			('$e', '$d','$i')";

		}
	}

	require_once("DBConnect.php");


	if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
		header('Location: event.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}


?>
<?php include 'includes/header.php';?>	
<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >>  Add event</p>
<div style="margin-left: 5%;">
	<h2>New Event</h2>
	<form action="" method="POST" name="eventt" enctype="multipart/form-data">
		<table  id="adduser">
			<tr>
				<td> Event: </td>
				<td><input type="text" name="event" placeholder="Enter Event Name" required="required"></td>
			</tr>	
			<tr>
			<td>Description:</td>
			<td><textarea rows="3" cols="30" name="description"></textarea></td>
			</tr>

		<tr>
			<td>Link:</td>
			<td> <input type="text" name="link" required="required" /></td>
		</tr>
		<tr>
			<td>Image:</td>
			<td> <input type="file" name="image" required="required" />
			</tr><tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add_event" value="ADD EVENT"></td>
			</tr>
		</table>
	</form>
</div>

<?php include 'includes/footer.php';?>
