<!DOCTYPE html>
<html>
<head>
	<title>Edit Place</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
	$user_id = @$_GET['id'];
	if (!isset($user_id)) {
		header('Location: list_place.php');
	}
//Load old data
	require_once("DBConnect.php");
	$sql = "SELECT * FROM `place` WHERE `id`='$user_id' Limit 0, 10";
	$result = mysqli_query($conn, $sql);
$prev_data = mysqli_fetch_assoc($result);


	if (isset($_POST['add_place'])) {
		$user_id = $_GET['id'];
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

				$sql ="UPDATE `place` SET `city`='$c', `place`='$p', `description_place`='$d',`image_place`='$file_name' WHERE `id`='$user_id';";
			}
		}


		if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
			header('Location: list_place.php');
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>
	<div style="border: 2px solid; border-color: black; min-height: 570px; margin:0 10%; " >
		<div>	
			<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >> Edit place</p>
		</div>
		<div style="margin-left: 32%;">
			<form action="" method="POST" name="place" enctype="multipart/form-data">
				<table  id="adduser">
					<tr>
						<td> City </td>
						<td><input type="text" name="cname" placeholder="Enter City Name" value="<?= $prev_data['city'];?>" required="required"></td>
					</tr>
					<tr>
						<td> Place </td>
						<td><input type="text" name="pname" placeholder="Enter Place Name" value="<?= $prev_data['place'];?>" required="required"></td>
					</tr>	
					<tr>
						<td>Description:</td>
						<td>
					<textarea rows="3" cols="30" value="<?= $prev_data['description_place'];?>" name="description"></textarea>
						</td>
					</tr>

					<tr>
						<td>Image:</td>
						<td> <input type="file" name="image_place" value="<?= $prev_data['image_place'];?>"  required="required" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="add_place" value="ADD PLACE"></td>
					</tr>
				</table>
			</form>

		</div>
	</div>

</body>
</html>