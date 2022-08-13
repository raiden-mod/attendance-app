<?php
// this will contain database root app root and file location
// database params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'class-attendance');

$conn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$options = array(
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
	$connection = new PDO($conn, DB_USER, DB_PASS, $options);
} catch (PDOException  $e) {
	$error = $e->getMessage();
	echo $error;
}
?>