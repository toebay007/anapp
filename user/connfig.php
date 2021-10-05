<?php

class connUser
{
	public $conn;			
	function __construct()
	{
		// session_start();				
		$this->conn = new Mysqli('eu-cdbr-west-01.cleardb.com','b6c1210995d143','50e71668','heroku_8490ea1f6b1a940');
	}
}


?>
