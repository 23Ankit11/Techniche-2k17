<?php
   $dbhost = "localhost";
   $dbuser = "technoappusers";
   $dbpass = "Technoapp@123";
   $dbname = "mydata";
   
   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if ( !$db ) {
		die("Connection failed : " . mysql_error());
	}
	
	
   
?>
