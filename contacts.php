<!DOCTYPE html>
<html>
<head>
	<title>Contacts - Reviews</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

	<?php include "virsutineJuosta.php"; ?>


	

	<div class="overlay"></div>

	<div class="contactsPuslapis bg-photo">
		<div class="content-wrapper">
			<h2 class="h-white">Contact Us - Reviews</h2>

			<div class="blocks-wrapper">
				<div class="form-wrapper">

					<div class="row">
			    	<form id="my-form" class="col s12" method="POST">
			      		<div class="row">
			        	<div class="input-field col s6">
			          <input id="first_name" type="text" class="validate white-text" name="first_name" required="">
			          <label for="first_name">First Name</label>
			        	</div>
			        	<div class="input-field col s6">
			          <input id="last_name" type="text" class="validate white-text" name="last_name" required="">
			          <label for="last_name">Last Name</label>
			        </div>
			      	</div>
			      
			      	<div class="row Email">
			        <div class="input-field col s12">
			          <input id="email" type="email" class="validate white-text" name="email" required="">
			          <label for="email">Email</label>
			        </div>
			      	</div>
			      	<div class="row Review">
			        <div class="input-field col s12">
			          <textarea id="atsiliepimas" class="materialize-textarea white-text" name="atsiliepimas" required=""></textarea>
			          <label for="textarea1">Your Review Here</label>
			        </div>
			      </div>

			      <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  				</button>

			    </form>
  				</div>

  				

				</div>
				<div class="map-wrapper">

					<ul class="mapsVidus">
						<li>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.983423849919!2d25.290128216029665!3d54.70991477940151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96ae1dedd637%3A0x73978617430c730c!2sUlon%C5%B3+g.+5%2C+Vilnius+08240!5e0!3m2!1sen!2slt!4v1530566996484" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</li>
						<li>
					<h6 class="find">Find Us:</h6>
					<p>Travel Agency</p>
					<p>Ulonu g. 5, Vilnius</p>
					<p>Mobile: +3706332323</p>
					<p>Email: travel@aroundtheworld.com</p>
					</li>

					</ul>

				</div>
			</div>
		</div>
	</div>

	<?php include "footeris.php"; ?>


		
			
		

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>