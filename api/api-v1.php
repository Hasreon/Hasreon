<?php
$x=$_REQUEST;
include("api_functions.php");
switch($x["mode"]){
	case "test":
		echo "good";
		break;
	case "move":
		return canMove($x['move_direction'],$x['current_location']);
		break;
	default:
		echo "No recognised mode requested.";
		break;
}
?>
