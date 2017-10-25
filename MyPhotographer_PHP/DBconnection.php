<?php

	$connection = mysql_connect('localhost','root','','myphotographer_db');

	if(!$connection){
		die(mysqli_connect_error());
	}
	
?>