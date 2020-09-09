
<?php

if (isset($_POST['add_place'])) {
	error_reporting(0);
	if(isset($_FILES['image_place'])){
      // echo "<pre>";print_r($_FILES['image']);exit;
		$errors= array();
		$file_name = $_FILES['image_place']['name'];
		$file_size =$_FILES['image_place']['size'];
		$file_tmp =$_FILES['image_place']['tmp_name'];
		$file_type=$_FILES['image_place']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image_place']['name'])));

		$extensions= array("jpeg","jpg","png");

		if(in_array($file_ext,$extensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size > 2097152){
			$errors[]='File size must be less than or equal to 2 MB';
		}

		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"files/".$file_name);
			$c = $_POST['city'];
			$p = $_POST['place'];

			$d = $_POST['description_place'];

			$sql = "INSERT INTO `place` (`city`,`place`, `description_place`,`image_place`) VALUES
			('$c','$p','$d','$file_name')";

		}
	}

	require_once("DBConnect.php");


	if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
		header('Location: list_place.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}


?>
<?php include 'includes/header.php';?>
<div>	
	<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >>  Add place</p>
</div>
<div style="margin-left: 5%;">
	<h2>New Place</h2>
<form action="" method="POST" name="eventt" enctype="multipart/form-data">
		<table  id="adduser">
			<tr>
				<td> City: </td>
				<td><input type="text" name="city" placeholder="Enter city Name" required="required"></td>
			</tr>
			<tr>
				<td> Place: </td>
				<td><input type="text" name="place" placeholder="Enter place Name" required="required"></td>
			</tr>	
			<tr>
			<td>Description:</td>
			<td>
				<textarea rows="3" cols="30" name="description_place"></textarea>
			</td>
		</tr>
		<tr>
			<td>Link:</td>
			<td> <input type="text" name="link_place" required="required" /></td>
		</tr>

		<tr>
			<td>Image:</td>
			<td> <input type="file" name="image_place" required="required" />
			</tr><tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add_place" value="ADD place"></td>
			</tr>
		</table>
	</form>
</div>

<?php include 'includes/footer.php';?>
