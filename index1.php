	<!DOCTYPE html>
	<html>
	<head>
		<title>Tours and Travels</title>
		<link rel="stylesheet" type="text/css" href="css1/sty.css">
		<style type="text/css">
			.slider 
			{  
				
				background: url('images/f.jpg') no-repeat center;
					background-size: cover;
				animation: slide 20s infinite;
				height: 100vh;
				

			}
			@keyframes slide{
				20%{
					background: url(images/a.jpg) no-repeat center;
					background-size: cover;
				}
				40%{
					background: url(images/b.jpg) no-repeat center;
					background-size: cover;
				}
				60%{
					background: url(images/c.jpg) no-repeat center;
					background-size: cover;
				}
				80%{
					background: url(images/d.jpg) no-repeat center;
					background-size: cover;
				}
				100%{
					background: url(images/e.jpg) no-repeat center;
					background-size: cover;
				}
			}

		</style>
	</head>
	<body>
		<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vistnepal";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM `expense` WHERE 1 Limit 0, 20";
	$result = mysqli_query($conn, $sql);
	// $data = mysqli_num_rows($result);
	//echo "<pre>"; print_r($result); exit();
	?>

			
	<header>
		<div class="main">
			<div class="nav">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul>
				<li class="active"><a href="index2.html">Home</a></li>
				<li><a href="thdo.php">Things to do</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="abtus.php">About Us</a></li>
	            <li><a href="#">Contact</a></li>

			</ul>
		</div>
		<div class="title">
			<h1>Tours and Travels</h1>
		</div>
	</header>
	<div class="slider">
	</div>
		<div >
		<div class="con">
		<div class="col">
	    <img src="images/eat.jpg" alt="Snow"> 
	     <span>Eat</span>
	  </div>
	  <div class="col">
	   
	<img src="images/play.jpg" alt="Snow">
	<span>Travel</span>
	  </div>
	  <div class="col">
	   <img src="images/relax.jpg" alt="Snow">
	<span>Relax</span>
	  </div>
		</div>
	<div id="intro">
		<div class="column1">
			<h1 style="padding-bottom: 3%;">Welcome To NEPAL</h1>
			Coming to Nepal is coming to an experience that is only yours. From the remotest corners to the urban landscape, Nepal embodies a sensory experience of colours, sounds, sights and tastes. Visit Nepal welcomes you to life’s amazing moments.
	    
	  </div>
	  <div class="column1">
	<img src="images/1.jpg" alt="Snow" style="width:100%">
	  </div>

	</div>
	<div id="content">
		<span1 style="text-align: center; padding: 3%;"><h1>----------EXPERIENCE NEPAL----------</h1></span1>

		<?php
	$i=0;

		while($row = mysqli_fetch_assoc($result)) {
			
			if($i%2==0){?>
			<h2 style="margin-left: 5%;"><?= strtoupper($row["event"]);?></h2>
	<div class="events">
	<a href="gallery.php?id=<?=$row['id'];?>"><img  src="files/<?= $row["image"];?>" alt="Thumb"></a>
	<span><?= $row["description"];?></span>
	</div>

<?php }
else{
		?>
		<h2 style="margin-left: 5%;"><?= strtoupper($row["event"]);?></h2>
	<div class="events">
		<span><?= $row["description"];?></span>
	<a href="gallery.php?id=<?=$row['id'];?>"><img  src="files/<?= $row["event"];?>" alt="Thumb"></a>
	
	</div>
	<?php } $i++; } ?>


	<h2 style="margin-left: 5%;">FOOD</h2>
	
	<h2 style="margin-left: 5%;">FESTIVALS</h2>
	<div class="festivals">
		
		<span>The Everest region in Nepal is more than just climbing and trekking, it is a life changing experience and some see it as a journey close to achieving Nirvana. Located in the north eastern province of Nepal, this region is in a world of its own with vast glaciers, icefalls, the highest mountains, deep valleys, precarious settlements, and hardy people challenging the harshest conditions thrown at them by nature in the thin air of high altitude.</span>
		<a href="#"><img src="images/festival.png"></a>
	</div>
		

	</div>
	<div id="footer">
		<div class="column">
	    <ul>
	    	<li>nepalvisit2020.com</li>
	<li>+977 9866551703 or +977-9841704019</li>
	<li>info@nepalvisit2020.com</li>
	</ul>
	  </div>
	  <div class="column">
	<h2>Quick Link</h2>
	<ul>
	    <li>Home</li>
	    <!-- <li>About Us</li> -->
	    <li>Testimonials</li>
	    <li>Photo Gallery</li>
	    <li>Visit Nepal 2020</li>
	    <li>Contact Us</li>
	</ul>
	  </div>
	  <div class="column">
	   <ul>
	    <li>Home</li>
	    <li>About Us</li>
	    <li>Testimonials</li>
	    <li>Photo Gallery</li>
	    <li>Visit Nepal 2020</li>
	    <li>Contact Us</li>
	</ul>
	  </div>
	</div>


	</div>


	</body>
	</html>