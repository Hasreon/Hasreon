<?php
header('Content-type: text/plain');
$person = $_GET["name"]; 
if($person !== '') {
    echo "Hello $person!";
} else {
    echo "Send a Request!";
};

?>
