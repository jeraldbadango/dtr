<?php
include 'DBConnection.php';


$sql       = 'select * from ot';
$results   = mysqli_query($connection, $sql);
$row_count = mysqli_num_rows($results);

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
while ($row = mysqli_fetch_array($results)) {
    echo '<tr><form action="OTActionModify.php" method="post">';
    echo '<td><input type="text" value="'.($row['Id']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['userid']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['date_from']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['date_to']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['time_in']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['time_out']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['ot_comment']).'" readonly></td>';
    echo '<td><input type="text" value="'.($row['isApproved']).'" readonly></td>';
    echo '<td><select name="option"><option value="approve">Approve</option><option value="reject">Reject</option></select></td>';
    echo '<td><input type="submit" value="Go">';
    echo '</tr></form>';
}
echo '</table>';

?>