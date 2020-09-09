<?php include 'includes/header.php';?>
<p><a href="index.php" style="text-decoration: none; padding-left: 10px;">Home</a> &raquo; Dashboard<span style="float: right; a margin-right: 10px;">Welcome <?= ucwords($_SESSION['username']);?>!</span></p>
<div class="content">
	<a href="list_admin.php"><img id="im" src="images/admin.png" width="80px" title="Manage Admin"></a>
	<a href="event.php"><img id="im" src="images/admin.png" width="80px" title="Manage Event"></a>
	<a href="list_place.php"><img id="im" src="images/admin.png" width="80px" title="Manage Place"></a>
	<a href="list_city.php"><img id="im" src="images/admin.png" width="80px" title="Manage City"></a>
	<a href="list_adventure.php"><img id="im" src="images/admin.png" width="80px" title="Manage Adventure"></a>
	<a href="list_hotel.php"><img id="im" src="images/admin.png" width="80px" title="Manage Hotel"></a>

	
	
	<a href="../font/index.php" target="_Blank"><img id="im" src="images/frontend.png" width="80px" title="Visit FrontEnd"></a>
</div>
<?php include 'includes/footer.php';?>