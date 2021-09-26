<?php

$mysqli = new mysqli("localhost","root","","anapp");
 
// Check connection
if($mysqli->connect_error){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>