<?php
include_once "config.php";
try{
	$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
	if($conn->connect_error){
		throw new Exception('Ошибка соединения с MySQL сервером: [' . $conn->connect_error . ']');
	}
}
catch (Exception $e) {
	echo $e->getMessage();
}	