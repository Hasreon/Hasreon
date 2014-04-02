<?php
header('Content-type: text/plain');
if(isset($_GET["name"]) {
    $person = $_GET["name"]; 
    echo "Hello $person!";
} else {
    echo "Send a Request!"
}

?>
