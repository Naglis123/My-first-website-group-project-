<!DOCTYPE html>
<html>
<head>
	<title>VCS projektas</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

 	<?php include "virsutineJuosta.php"; ?> 

	<?php
		$input = array(
			'images/pic1.jpg', 'images/pic2.jpg', 'images/pic3.jpg', 'images/pic4.jpg', 'images/pgr.jpg', 'images/pic5.jpg', 'images/pic6.jpg', 'images/pic7.jpg', 'images/pic8.jpg', 'images/pic9.jpg', 'images/pic10.jpg'
		);
		$rand_photos = array_rand($input);
		// echo $input[$rand_photos];

	?>






	<div class="visasPsl">

		<div class="virsus" style="background-image: url(<?php echo $input[$rand_photos]; ?>);">
			<div class="shade"></div>
			
			<div class="title">
				<h1 class="mainTitle">Welcome, let's travel the world!</h1>
				<h5 class="since"><span class="h-linija"></span>Since 2019<span class="h-linija"></span></h5>
				<h4 class="about">About us</h4>
				<h5 class="kuryba"><span class="h-linija2"></span>We are a group of people gathered to hepl You conquer the World. Tickets, housing and trips within 3 steps. This is where Your journey begins<span class="h-linija2"></span></h5>
			</div>

<div class="burbuliukas">

			<!-- <a href="list.php"> -->
				<img class="arrow-down" src="images/down-arrow.png">
				<a href="list.php" class="btn-floating btn-large pulse"><i class="material-icons">arrow-down</i></a>
		<!-- 	</a> -->

		
			
 </div>


		</div>

<?php include "footeris.php"; ?> 

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>