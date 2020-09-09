
<?php

if (isset($_POST['add_adventure'])) {
	error_reporting(0);
	if(isset($_FILES['image_adventure'])){
      // echo "<pre>";print_r($_FILES['image']);exit;
		$errors= array();
		$file_name = $_FILES['image_adventure']['name'];
		$file_size =$_FILES['image_adventure']['size'];
		$file_tmp =$_FILES['image_adventure']['tmp_name'];
		$file_type=$_FILES['image_adventure']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image_adventure']['name'])));

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
			$a = $_POST['adventure'];

			$d = $_POST['description_adventure'];

			$sql = "INSERT INTO `adventure` (`city`,`adventure`, `description_adventure`,`image_adventure`) VALUES
			('$c','$a','$d','$file_name')";

		}
	}

	require_once("DBConnect.php");


	if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
		header('Location: list_adventure.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}


?>
<?php include 'includes/header.php';?>
<div>	
	<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >>  Add adventures</p>
</div>
<div style="margin-left: 5%;">
<h2>New Adventure</h2>
<form action="" method="POST" name="eventt" enctype="multipart/form-data">
		<table  id="adduser">
			<tr>
				<td> City: </td>
				<td><input type="text" name="city" placeholder="Enter city Name" required="required"></td>
			</tr>
			<tr>
				<td> adventure: </td>
				<td><input type="text" name="adventure" placeeholder="Enter adventure Name" required="required"></td>
			</tr>	

			<td>Description:</td>
			<td>
				<textarea rows="3" cols="30" name="description_adventure"></textarea>
			</td>
		</tr>

		<tr>
			<td>Image:</td>
			<td> <input type="file" name="image_adventure" required="required" />
			</tr><tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add_adventure" value="ADD ADVENTURE"></td>
			</tr>
		</table>
	</form>
</div>

<?php include 'includes/footer.php';?>
