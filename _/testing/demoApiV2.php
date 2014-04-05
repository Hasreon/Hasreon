<?php
$x=$_REQUEST;
switch($_REQUEST["mode"]){
	case "test":
		echo "good";
		break;
    case "move":
        
	default:
		echo "No recognised mode requested.";
		break;
}
?>