<?php
include "../core/controller/player.php";
$x=$_REQUEST;
switch($_REQUEST["mode"]){
	case "test":
		echo "good";
		break;
    case "move":
        if(player.canMove("up")){
            player.move("up");
        }else{
            respond("Can't move that direction!");
        }
	default:
		echo "No recognised mode requested.";
		break;
}
?>