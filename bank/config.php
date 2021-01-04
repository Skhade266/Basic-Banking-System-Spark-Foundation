<?php

	$conn = mysqli_connect('127.0.0.1','root','');
 if(!$conn)
 {
	 echo 'Not Connected to server';
 }
 
 if(!mysqli_select_db($conn,'sparks_bank'))
 {
	 echo 'Database Not Selected';
 }
	// if(!$conn){
		// die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	// }

?>