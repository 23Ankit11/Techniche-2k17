<?php
   $dbhost = "localhost";
   $dbuser = "";
   $dbpass = "";
   $dbname = "";
   
   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if ( !$db ) {
		die("Connection failed : " . mysql_error());
	}
	
	
   
?>
