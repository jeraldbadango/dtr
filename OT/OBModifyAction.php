<?php
include 'DBConnection.php';

$id = $_POST['id'];


if($_POST['option'] == 'approve')
{
	$sql = "UPDATE obform SET `status` = 'approve' where obid = $id";
	 mysqli_query($connection, $sql);

}else if($_POST['option'] == 'reject')
{
	$sql = "UPDATE obform SET `status` = 'reject' where obid = $id";
	 mysqli_query($connection, $sql);
}
header("Location:index.php");
?>