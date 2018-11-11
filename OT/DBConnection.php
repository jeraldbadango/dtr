<?php

	$connection = mysqli_connect("localhost","aldrin","admin","dummyot");

if ($connection->connect_error)
{
	die("Connection failed: " . $connection->connect_error);
} 

?>