<?php
include('config.php');
session_start();
if(session_destroy())
{	if(isset($_SESSION['ad']))
	{
		header("LOCATION:index.php");
	}
	if(isset($_SESSION['id']))
	{
		header("LOCATION:index.php");
	}

}
?>