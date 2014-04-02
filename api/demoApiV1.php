<?php
header('Content-type: text/html');
$person = $_GET["name"];
echo "Hello $person!";
echo $_REQUEST;
?>
