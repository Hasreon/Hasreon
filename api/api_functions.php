<?php

function removeslashes($string) {
	$string = implode("",explode("\\",$string));
	return stripslashes(trim($string));
}

function locData($file){
  $loc = "Loc/" + removeslashes($file) + ".json";
  return json_decode(file_get_contents($loc));
}

function canMove($moveDirection,$currentLocation){
  $locationData = locData($currentLocation);    // Fetch location data
  return $locationData->{$moveDirection};       // Return the specified JSON response in code. Either false or string location.
}
?>
