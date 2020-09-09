<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Expenses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$user_sn = @$_GET['sn'];
if (!isset($user_sn)) {
	header('Location: list_expense.php');
}
//Load old data
require_once("DBConnect.php");
$sql = "SELECT * FROM `expense` WHERE `id`='$user_sn' Limit 0, 10";
$result = mysqli_query($conn, $sql);
$prev_data = mysqli_fetch_assoc($result);
// echo "<pre>"; print_r($prev_data);exit;


	<?php if (isset($_POST['expense_amount']))
		{$c = $_POST['expense_amount'];
		$conn = mysqli_connect('localhost', 'root','','expense_db');
		if($conn-> connect_error){
				die("Connection failed:". $conn-> connect_error);
			}
		$sql = "SELECT SUM(income_amount) as `totalincome` from income";
		$result = $conn-> query($sql);
		$row = $result-> fetch_assoc();
		 	$sql1 = "SELECT SUM(expense_amount) as `totalexpense` from expense";
		 	$result1 = $conn-> query($sql1);
		$row1 = $result1-> fetch_assoc();
		$total= $row['totalincome']-$row1['totalexpense']; 
		if($total<$c)
		{

    echo "<script> 
    alert('enter valid expense amount!');
    window.location('addexpense.php'); </script>";
}
else{

if (isset($_POST['add_expense'])) {
	$user_sn = $_GET['sn'];
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
         $a = $_POST['expense_name'];
	$c = $_POST['expense_amount'];
	$d = $_POST['expense_description'];

        $sql ="UPDATE `expense` SET `expense_name`='$a', `expense_amount`='$c', `expense_description`='$d',`image_expense`='$file_name' WHERE `id`='$user_sn';";
      }
   }
	// echo $sql;exit;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
    header('Location: list_expense.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

<div style="border: 2px solid; border-color: black; height: 100%; margin:0 10%; " >
		<h1 style="text-align: center;">Expense Management System</h1>
	</div>

	<div style="border: 2px solid; border-color: black; min-height: 570px; margin:0 10%; " >
		<div>	
		<p><a href="../index.php">Home</a> <a href="index.php">>> DashBoard</a> >> Edit expense</p>
		</div>
		<div style="margin-left: 32%;">
<form action="" method="POST" name="expense" enctype="multipart/form-data">
	<p style="font-size: 27px;">Edit expense #<?= $prev_data['id'];?></p>
<table  id="adduser">
	<tr>
		<td> Expense Name:</td>
		<td><input type="text" name="expense_name" placeholder="Enter Expense Name" required="required"></td>
	</tr>	
	<tr>
		<td>Expense Amount:</td>
		<td><input type="number" name="expense_amount" placeholder="Enter Expense Amount" required="required"></td>
	</tr>
	
		<td>Expense Description:</td>
		<td>
			<textarea rows="3" cols="30" name="expense_description"></textarea>
		</td>
	</tr>
	
	<tr>
		<td>Expense Image:</td>
	<td> <input type="file" name="image" required="required" />
</tr><tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_expense" value="UPDATE"></td>
	</tr>
</table>
</form>

</div>
</div>

</body>
</html>