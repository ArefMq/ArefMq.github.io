<?php
	session_start();
	require_once("hashtable_data.php");
	
	function secure_get_value($key) {
		$t = $GLOBALS['hashTable'];
		return $t[$key];
	}
	
	function saveSession($name, $relation) {
		$_SESSION['name'] = sha1($name);
		$_SESSION['relation'] = sha1($relation);
	}
	
	function checkSession() {
		$h_name = $_SESSION['name'];
		$h_relation = $_SESSION['relation'];
		$key = substr($h_name, 0, 5);
			
		return checkValidation_name($key, $h_name) && checkValidation_relation($key, $h_relation);
	}
	
	function checkValidation($name, $lastname, $relation) {
		$h_name = "";
		$h_last = "";
		$h_relation = "";
		
		$h_name = sha1($name);
		$h_last = sha1($lastname);
		$h_relation = sha1($relation);
		
		$key = substr($h_name, 0, 5);
		
		//-- Check if the name exists
		if (!checkValidation_name($key, $h_name))
			return 'n';
		
		//-- Check if the name mateches the relation
		if (!checkValidation_relation($key, $h_relation))
			return 'r';
		
		//-- Checking if the last name is required
		if (!checkValidation_lastName($key, $h_last))
			return 'l';
		
		return 's';
	}
	
	function checkValidation_name($key, $h_name) {
		$hashTable = $GLOBALS['hashTable'];
		
		$orginalName = "";
		@$orginalName = $hashTable[$key];
		if ($orginalName == "" || $orginalName != $h_name)
			return false;
		return true;
	}
	
	function checkValidation_relation($key, $h_relation) {
		$hashTable = $GLOBALS['hashTable'];
		$connections = $GLOBALS['connections'];

		$originalRelation = "";
		@$originalRelation = $connections[$key];
		if ($originalRelation == "") {
			return false;
		}
		
		$hasFound = false;
		foreach($originalRelation as $r)
			if ($hashTable[$r] == $h_relation) {
				$hasFound = true;
				break;
			}
		
		return $hasFound;
	}
	
	function checkValidation_lastName($key, $h_last) {
		$hashTable = $GLOBALS['hashTable'];
		$lasties = $GLOBALS['lasties'];

		$originallastname = "";
		@$originallastname = $lasties[$key];
		if ($originallastname != "") {			
			$hasFound = false;
			foreach($originallastname as $l)
			if ($hashTable[$l] == $h_last) {
				$hasFound = true;
				break;
			}
			
			return $hasFound;
		}
		return true;
	}
?>