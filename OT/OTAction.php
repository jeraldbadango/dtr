<?php
 include 'DBConnection.php';
 $userid = 0;
 $time_in = $_POST["time_in"];
 $time_out= $_POST["time_out"];
 $comment= $_POST["ot_comment"];
 $date_from = $_POST["date_from"];
 $date_to = $_POST["date_to"];

 if(strtotime($time_in) < strtotime("17:30:00"))
 	{echo "Must be after 5:30!";
 }else
 {
 	$insertQuery = "INSERT INTO OT (`userid`,`time_in`,`time_out`,`date_from`,`date_to`,`ot_comment`,`isApproved`)
 		 Values ($userid,'$time_in','$time_out','$date_from','$date_to','$comment',0)";

      mysqli_query($connection, $insertQuery);

 }
?>