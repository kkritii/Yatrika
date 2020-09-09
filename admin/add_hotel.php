
<?php

if (isset($_POST['add_hotel'])) {
	error_reporting(0);
	if(isset($_FILES['image_hotel'])){
      // echo "<pre>";print_r($_FILES['image']);exit;
		$errors= array();
		$file_name = $_FILES['image_hotel']['name'];
		$file_size =$_FILES['image_hotel']['size'];
		$file_tmp =$_FILES['image_hotel']['tmp_name'];
		$file_type=$_FILES['image_hotel']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image_hotel']['name'])));

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
			$a = $_POST['hotel'];
			$sql = "INSERT INTO `hotel` (`city`,`hotel`, `description_hotel`,`image_hotel`) VALUES
			('$c','$a','$file_name')";

		}
	}

	require_once("DBConnect.php");


	if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
		header('Location: list_hotel.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}


?>
<?php include 'includes/header.php';?>
<div>	
	<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >>  Add hotels</p>
</div>
<div style="margin-left: 5%;">
<h2>New hotel</h2>
<form action="" method="POST" name="eventt" enctype="multipart/form-data">
		<table  id="adduser">
			<tr>
				<td> City: </td>
				<td><input type="text" name="city" placeholder="Enter city Name" required="required"></td>
			</tr>
			<tr>
				<td> hotel: </td>
				<td><input type="text" name="hotel" placeeholder="Enter hotel Name" required="required"></td>
			</tr>
		<tr>
			<td>Image:</td>
			<td> <input type="file" name="image_hotel" required="required" />
			</tr><tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add_hotel" value="ADD HOTEL"></td>
			</tr>
		</table>
	</form>
</div>

<?php include 'includes/footer.php';?>
