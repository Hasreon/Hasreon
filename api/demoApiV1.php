<?php
// This is the server-side script
$person = $_GET["name"];

// Set the content type
header('Content-Type: text/html');
 
// Send the data back

echo "Hello $person !"
?>
