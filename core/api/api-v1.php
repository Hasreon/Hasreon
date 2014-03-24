<?php
switch($_REQUEST["mode"]){
		case "test":
			echo "good";
			break;
		default:
			echo "No recognised mode requested.";
			break;
	}
?>