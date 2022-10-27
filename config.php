<?php

	$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shreyanth','28071998@','shrey-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>