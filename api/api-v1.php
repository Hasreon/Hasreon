<?php
include "../core/controller/player.php";
$x=$_REQUEST;
switch($_REQUEST["mode"]){
	case "test":
		echo "good";
		break;
    case "move":
        if(canMove($_REQUEST['move_direction'],$_REQUEST['current_location'])){
            respond("success");
        }else{
            respond("Can't move that direction!");
        }
	default:
		echo "No recognised mode requested.";
		break;
}
?>
