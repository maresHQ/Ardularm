<?php
	function Connection() {
		$servername = "***";
		$username = "***";
		$password = "***";
		$dbname = "***";

		// Create connection
		$link = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$link) {
		     die("Connection failed: " . mysqli_connect_error());
		}

		return $link;
	}
?>
