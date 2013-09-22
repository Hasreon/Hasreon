<?php

// Route Init
// Via https://bitbucket.org/JREAM/route/src/0271c7dce7606abec29f3ba9909bacbcdd2a20fb?at=master
include("route.php");
$route = new Route();
// Close Route Init

//Add Root path
$route->add('/', function() {
	echo "Home!";
});

// Test Suite Paths
$route->add('/name', function() {
	echo "name;"
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
