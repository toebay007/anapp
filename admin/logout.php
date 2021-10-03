<?php

session_start();


if (isset($_SESSION['fname'])) {
	session_unset($_SESSION['fname']);
	session_destroy();

}
	
 header("location:/index.php?loggedout=success");


?>