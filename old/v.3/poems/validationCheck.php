<?php
	@$name     = strtolower($_GET['firstname']);
	@$relation = strtolower($_GET['relation']);
	@$lastname = strtolower($_GET['lastname']);
	
	if ($name == "")
		header("Location: login.php?e=en");
	if ($relation == "")
		header("Location: login.php?e=er");

	file_put_contents("people.log", "Name     :: " . $name . "\r\nRelation :: " . 
					$relation . "\r\nLastname :: " . $lastname . 
					"\r\n[" . date("Y-M-d h:i:s") .
					"]\r\n----------------------------------------------\r\n", FILE_APPEND);
	
	
	require_once("secure.php");
	
	$result = checkValidation($name, $lastname, $relation);
	if ($result == 's') {
		saveSession($name, $relation);
		header("Location: index.php");
	} else {
		header("Location: login.php?e=" . $result);
	}
?>