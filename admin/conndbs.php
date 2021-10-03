<?php

class connStaff
{
	public $conns;			
	function __construct()
	{
		// session_start();				
		$this->conns = new Mysqli('localhost','root','','anapp');
	}
}


?>
