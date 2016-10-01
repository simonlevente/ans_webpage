<?php

function check()
{
	if ( (isset($_SESSION["admin"]))and(isset($_SESSION["password"])) )
		{
		if (($_SESSION["admin"]=="changehereforowuse")and($_SESSION["password"]=="changehereforowuse")) 
		{
			return true;
		}
	}
	return false;
}

function logout()
{

	if(isset($_GET["logout"]))
	{
		$_SESSION["admin"] = '';
		$_SESSION["password"] = '';
		$_SESSION["status"] = 'ki';
		session_destroy();
		header('location: ../index.php');
	}
}

?>