<?php

    $connection = mysqli_connect("localhost","aldrin","admin","dummyot");


if(isset($_POST['submit']))
{
    

    $emp_id =$_POST["emp_id"];
    $from_dept =$_POST["from_dept"];
    $to_dept =$_POST["to_dept"];
    $purpose =$_POST["purpose"];
    $from_time =$_POST["from_time"];
    $to_time =$_POST["to_time"];
     $status = "pending";


     $SQL = "INSERT INTO obform (`emp_id`, `dept_from`,`dept_to`,`purpose`,`dept_time`,`return_time`,`status`) VALUES ($emp_id, '$from_dept','$to_dept','$purpose','$from_time','$to_time','$status')";
    
mysqli_query($connection, $SQL);

}
header("Location:index.php");


?>