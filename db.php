<?php

$host = "localhost";
$user = "cl58-chat-gm2";
$pass = "2CY/w9Uyz";
$db_name = "cl58-chat-gm2";

	$con = new mysqli($host,$user,$pass,$db_name);
	
	
	function formatDate($date){
		//$date = strtotime('-6 hours', strtotime($date);
	return date('F j, Y, g:i a', strtotime($date)- 5 * 3600);
}
	

?>