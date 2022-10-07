<?php

	//  Development connection
	
	$databaseHost = '"https://684a780d-69df-4d30-a4fe-c9cf9fe90945-bluemix.cloudantnosqldb.appdomain.cloud';
	$databaseName = 'mydb';
	$databaseUsername = 'root';
	$databasePassword = '';

	// remote Database connection
	
	// $databaseHost = '#####';
	// $databaseName = '#####';
	// $databaseUsername = '#####';
	// $databasePassword = '###############';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>