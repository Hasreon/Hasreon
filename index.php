<?php

// Route Init
// Via https://bitbucket.org/JREAM/route/src/0271c7dce7606abec29f3ba9909bacbcdd2a20fb?at=master
include("libs/route.php");
$route = new Route();
// Close Route Init

//Add Root path
$route->add('/', function() {
	echo "Home!";
});

// Test Suite Paths
$route->add('/api', function() {
	require "parts/api-v1.php";/*
	switch($_REQUEST["mode"]){
		case "test":
			echo "good";
			break;
		default:
			echo "No recognised mode requested.";
	}*/
});

$route->add('/name/.+', function($name) {
	echo "Hello $name";
});


// Start Static Server (INSECURE--Uncomment at your peril)
/*
$route->add('/static/.+', function($fname) {
	$type = mime_content_type("static/".$fname);
	header('Content-type: $type');
	echo file_get_contents("static/".$fname);
});
*/
// End Static Server

// And...Run
$route->submit();
// And...Ran
