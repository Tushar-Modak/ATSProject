<?php
	
	// CONNECT
	$con = mysqli_connect('127.0.0.1', 'root', '','ats_project');
	if($con == null)
	{
		die('error connecting database');
	}
	
?>