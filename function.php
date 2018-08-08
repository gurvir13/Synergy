<?php

function string_check($string){
	global $conn;
	$string = mysqli_real_escape_string($conn,$string);
	return $string;
}

function query_check($result){
	global $conn;
	if(!$result){
		die("something went wrong  ".mysqli_error($conn));
	}
}




?>