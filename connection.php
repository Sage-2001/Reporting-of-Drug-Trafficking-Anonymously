<?php

$conn = "";

try {
	$host = "localhost";
	$db = "admin";
	$user = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$host; dbname=admin",
		$user, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
