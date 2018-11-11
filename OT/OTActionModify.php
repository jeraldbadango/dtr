<?php
include 'DBConnection.php';

$id = $_POST['id'];

if($_POST['option'] == 'approve')
{
	$sql = "UPDATE OT SET `isApproved` = 1 where Id = $id";
	 mysqli_query($connection, $sql);
}else if($_POST['option'] == 'reject')
{
	$sql = "UPDATE OT SET `isApproved` = 0 where Id = $id";
	 mysqli_query($connection, $sql);
}
header("Location:index.php")
?>