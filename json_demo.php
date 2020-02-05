<?php
	$json='{"name":"khantil","lname":"patel"}';
	$arr=json_decode($json,true);
	
	echo $arr["name"];
?>