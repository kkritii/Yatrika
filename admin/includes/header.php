
<?php
// echo $_COOKIE["member_login"];exit;
if(empty($_SESSION)) // if the session not yet started
   session_start();

if(!isset($_SESSION['username'])) { 
	echo "<script>window.location='login.php';</script>";
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>VisitNepal - Dashboard</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.png">

<!-- make sure the src path points to your copied ckeditor folder -->
<!-- <script type="text/javascript" src="../ckeditor5/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
</head>
<body>
    <div class="body_wrapper">
        <div class="header">
        	<div style="width: 12%; float: left;">
        		<img src="images/logo.png" width="80px">
        	</div>
        	<div>
        		<h1 style="color: #F00;">Yatrika<span style="float: right;"><a href="logout.php"><img src="images/logout.png" width="30px;"></a></span></h1>
        	</div>            
        </div>
        <hr>