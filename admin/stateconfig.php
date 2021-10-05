<?php

$mysqli = new mysqli('eu-cdbr-west-01.cleardb.com','b6c1210995d143','50e71668','heroku_8490ea1f6b1a940');
 
// Check connection
if($mysqli->connect_error){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>