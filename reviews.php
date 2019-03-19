<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "atsiliepimai";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		mysqli_set_charset($conn, "utf8");


		$email = $_POST['email'];
		$vardas = $_POST['vardas'];
		$pavarde = $_POST['pavarde'];
		$atsiliepimas = $_POST['atsiliepimas'];
		
		$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
		$db = mysql_select_db("kelioniu_atsiliepimai", $connection); // Selecting Database



		$sql = "SELECT vardas, pavarde, email, atsiliepimas FROM kelioniu_atsiliepimai";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo 'failed';

			else {
				$sql = "INSERT INTO kelioniu_atsiliepimai (vardas, pavarde, email, atsiliepimas)
				VALUES ('" . $_GET["vardas"] . "', '" . $_GET["pavarde"] . "', '" . $_GET["email"] . "', '" . $_GET["atsiliepimas"] . "')";
				echo 'success';
			}


		/*if (isset($_POST['email'])) {
		$sql = "INSERT INTO kelioniu_atsiliepimai (vardas, pavarde, email, atsiliepimas)
				VALUES ('" . $_GET["vardas"] . "', '" . $_GET["pavarde"] . "', '" . $_GET["email"] . "', '" . $_GET["atsiliepimas"] . "')"; //Insert Query
		echo "Form Submitted succesfully";
		}*/
		mysql_close($connection); // Connection Closed





		/*if (isset($_GET["vardas"]) && $_GET["vardas"] != "" &&
			isset($_GET["pavarde"]) && $_GET["pavarde"] != "" &&
			isset($_GET["email"]) && $_GET["email"] != "" &&
			isset($_GET["atsiliepimas"]) && $_GET["atsiliepimas"] != ""
	) {

			      $sql = "INSERT INTO kelioniu_atsiliepimai (vardas, pavarde, email, atsiliepimas)
				VALUES ('" . $_GET["vardas"] . "', '" . $_GET["pavarde"] . "', '" . $_GET["email"] . "', '" . $_GET["atsiliepimas"] . "')";

*/


?>