<?php
$user_id = @$_GET['id'];
if (!isset($user_id)) {
	header('Location: list_hotel.php');
}
 
require_once('DBConnect.php');
$sql = "DELETE FROM `hotel` WHERE id='$user_id';";

if (mysqli_query($conn, $sql)) {
    // echo "Record deleted successfully";
    header('Location: list_hotel.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}