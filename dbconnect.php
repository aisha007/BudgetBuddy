<?php
	
	//development part
	/* define('DB_SERVER' , 'localhost');
	define('DB_USERNAME' , 'root');
	define('DB_PASSWORD' , '');
	define('DB_NAME' , 'wtproject'); */

	// Remote datatbase connection 
	define('DB_SERVER' , 'remotemysql.com');
	define('DB_USERNAME' , 'C39P2fOKVx');
	define('DB_PASSWORD' , '2stQPfCAQI');
	define('DB_NAME' , 'C39P2fOKVx');
	
	//connection with database
	$conn = mysqli_connect(DB_SERVER , DB_USERNAME , DB_PASSWORD , DB_NAME);
	
	if($conn == false ) {
		die("Error: Could not connect to database" . mysqli_connect_error());
	
	}
	/*else {
	echo "Works";
	}*/
	
	
?>
