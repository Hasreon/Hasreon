<?php
$x=$_REQUEST;
include("api_functions.php");
switch($x["mode"]){
	case "test":
		echo "good";
		break;
    case "move":
        if(canMove($x['move_direction'],$x['current_location'])){
            respond("success");
        }else{
            respond("Can't move that direction!");
        }
	default:
		echo "No recognised mode requested.";
		break;
}
?>
