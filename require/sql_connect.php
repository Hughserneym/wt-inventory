<?php
	$mysqli = new mysqli("localhost", "root", "", "wt_database");
	/* check connection */
	if (!$mysqli) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
?>
