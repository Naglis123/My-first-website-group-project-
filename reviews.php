<?php

		$servername = "localhost";
		$username = "coktai_vcs190320-c";
		$password = "8pMhmmZpmxdE2vf5";
		$dbname = "coktai_vcs190320-c";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		mysqli_set_charset($conn, "utf8");

		if(isset($_POST["email"]))
		{
			$email = $_POST["email"];
			$vardas = $_POST["first_name"];
			$pavarde = $_POST["last_name"];
			$atsiliepimas = $_POST["atsiliepimas"];

			$sql = "SELECT vardas, pavarde, email, atsiliepimas FROM kelioniu_atsiliepimai WHERE vardas = '$vardas' AND pavarde = '$pavarde' AND email = '$email' AND atsiliepimas = '$atsiliepimas'";
			$result = mysqli_query($conn, $sql);


			if (mysqli_num_rows($result) > 0)
			{
				echo 'duplicate';
			}
			else
			{
				$sql = "INSERT INTO kelioniu_atsiliepimai (vardas, pavarde, email, atsiliepimas)
				VALUES ('".$vardas."', '".$pavarde."', '".$email."', '".$atsiliepimas."')";
				if(mysqli_query($conn, $sql))
				{
					echo "success";
				}
				else
				{
					echo "failed";
				}
			}

			
			
		};



?>