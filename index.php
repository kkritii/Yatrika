<!DOCTYPE html>
<html>
<head>
	<title>Tours and Travels</title>
	<link rel="stylesheet" type="text/css" href="css1/sty.css">
	<link rel="stylesheet" type="text/css" href="css1/thdo.css">
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
	require_once("backend/DBConnect.php");
	$sql = "SELECT * FROM `event` WHERE 1 Limit 0, 20";
	$result = mysqli_query($conn, $sql);
	include('header1.php')?>
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
			<img src="images/nepal.jpg" style="float:right"; width="80%">
		</div>

	</div>
	<div id="content">
		<span1 style="text-align: center; padding: 3%;"><h1>----------EXPERIENCE NEPAL----------</h1></span1>
		<?php
		$i=0;

		while($row = mysqli_fetch_assoc($result))
		{
			if($i%2==0){ ?>
				<h2 style="margin-left: 5%;"><?= strtoupper($row["event"]);?></h2>
				<div class="events">
					<a href="<?= $row["link"];?>"><img src="files/<?= $row["image"];?>" alt="Thumb" style="float:right; width:90%;"></a>
					<span><?= $row["description"];?></span>
				</div>
			<?php }
			else{ ?>
				<h2 style="margin-left: 5%;"><?= strtoupper($row["event"]);?></h2>
				<div class="events">
					<span><?= $row["description"];?></span>
					<a href="<?= $row["link"];?>"><img src="files/<?= $row["image"];?>" alt="Thumb" style="float:right; width:90%;"></a>
					
				</div>

				<?php
			}
			$i++; } ?>



			