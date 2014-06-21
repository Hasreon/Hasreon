<?php
$path = $_SERVER['PATH_INFO'];
switch($path){
	case "/move":
		echo "i equals 0";
		break;
	case "/description":
		echo "i equals 1";
		break;
	default:
		echo "What are you doing?";
}
?>
