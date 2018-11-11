<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://use.fontawesome.com/releases/v5.0.10/css/all.css'>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>

<body>

    <div class="logo">
        <img src="logo-banner.png" alt="" srcset="">
    </div>

    <div class="tabs">
       <div class="tabs-content" style="width: 100%">
         <form action="OTActionModify.php" method="post">
            <?php
include 'DBConnection.php';

$id = $_GET['id'];
$sql       = "select * from ot where `Id` = $id limit 1";
$results   = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($results);

echo '<table border="1">';
echo '<thead>';

echo '<th>'.'Id'.'</th>';
echo '<th>'.'UserId'.'</th>';
echo '<th>'.'Date From'.'</th>';
echo '<th>'.'Date To'.'</th>';
echo '<th>'.'Time In'.'</th>';
echo '<th>'.'Time Out'.'</th>';
echo '<th>'.'Comment'.'</th>';
echo '<th>'.'Status'.'</th>';
echo '<th>'.'Select Option'.'</th>';
echo '<th>'.''.'</th>';

echo '</thead>';

    echo '<tr>';
    echo '<td><input style="width: 20px ;" type="text" name="id" value="'.($row['Id']).'" readonly></td>';
    echo '<td><input style="width: 20px ;" type="text" name="userid" value="'.($row['userid']).'" readonly></td>';
    echo '<td><input style="width: 100px ;" type="text" value="'.($row['date_from']).'" readonly></td>';
    echo '<td><input style="width: 100px ;" type="text" value="'.($row['date_to']).'" readonly></td>';
    echo '<td><input style="width: 100px ;" type="text" value="'.($row['time_in']).'" readonly></td>';
    echo '<td><input style="width: 100px ;" type="text" value="'.($row['time_out']).'" readonly></td>';
    echo '<td><input style="width: 100px ;" type="text" value="'.($row['ot_comment']).'" readonly></td>';
    echo '<td><input style="width: 50px ;" type="text" value="'.($row['isApproved']).'" readonly></td>';
    echo '<td><select style="width: 100px ;" name="option"><option value="approve">Approve</option><option value="reject">Reject</option></select></td>';
    echo '<td><input type="submit" value="Go">';
    echo '</tr>';

echo '</table>';

?>
        </form>

       </div> 

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>

</html>