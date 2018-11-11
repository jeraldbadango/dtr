

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
        <div class="tabs-nav">
            <ul>
                <li class="is-active">Overtime</li>
                <li>OB</li>
            </ul>
        </div>
        <div class="tabs-content">
            <div class="is-active">
                <!-- Set of nested tabs -->
                <div class="tabs">  
                    <div class="tabs-nav">
                        <ul>
                            <li class="is-active">Apply for Overtime</li>
                            <li>My Overtime</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tabs-form is-active">

                        
                            <form action="OTAction.php" method="post">
                                <ul class="wrapper">
                                    <h3>OT Details</h3>
                                    <li class="form-row">
                                        <label for="ot-type">OT Type</label>
                                        <select name="ot-type" id="ot-type" required>
                                            <option value="test1">test1</option>
                                            <option value="test2">test2</option>
                                            <option value="test3">test3</option>
                                        </select>
                                    </li>

                                    <li class="form-row">
                                        <label for="">OT Balance</label>
                                        <input type="text" disabled>
                                    </li>
                                </ul>

                                <ul class="wrapper">
                                    <h3>Date Duration</h3>
                                    <li class="form-row">
                                        <label for="">From Date</label>
                                        <input type="date" id="date_from" name="date_from"  required>
                                    </li>

                                    <li class="form-row">
                                        <label for="">To Date</label>
                                        <input type="date" id="date_to" name="date_to" required>
                                    </li>
                                </ul>

                                <ul class="wrapper">
                                    <h3>Time Duration</h3>
                                    <li class="form-row">
                                        <label for="">Time From</label>
                                        <input type="time" name="time_in" id="  " >
                                    </li>

                                    <li class="form-row">
                                        <label for="">Time To</label>
                                        <input type="time" name="time_out" id="time_out">
                                    </li>
                                </ul>

                                <ul class="wrapper">
                                    <h3>Additional Details</h3>
                                    <li class="form-row">
                                    <label for="">Comment</label>
                                        <textarea name="ot_comment" id="ot_comment" cols="35" rows="3"></textarea>
                                    </li>
                                </ul>

                                    <input type="submit" value="Apply">
                                
                            </form>


                        </div>
                        <div>
                            <table class="table hover" id="resultTable">

                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th rowspan="1" style="width:24%"><span class="headerCell">UserId</span></th>
                                        <th rowspan="1" style="width:18%"><span class="headerCell">Date From</span></th>
                                        <th rowspan="1" style="width:10%"><span class="headerCell">Date To</span></th>
                                        <th rowspan="1" style="width:12%"><span class="headerCell">Time in</span></th>
                                        <th rowspan="1" style="width:9%"><span class="headerCell">Time out</span></th>
                                        <th rowspan="1" style="width:12%"><span class="headerCell">Comment</span></th>
                                        <th rowspan="1" style="width:17%"><span class="headerCell">Status</span></th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td colspan="8"></td>
                                    </tr>


                                    <?php
include 'DBConnection.php';


$sql       = 'select * from ot';
$results   = mysqli_query($connection, $sql);
$row_count = mysqli_num_rows($results);
$id = 0;

while ($row = mysqli_fetch_array($results)) {
    echo '<tr><td><a href="OTApprove.php?id='.$row['Id'].'">'.$row['Id'].'</a></td></tr>';
    echo '<td>'.$row['userid'].'</td>';
    echo '<td>'.$row['time_in'].'</td>';
    echo '<td>'.$row['time_out'].'</td>';
    echo '<td>'.$row['date_from'].'</td>';
    echo '<td>'.$row['date_to'].'</td>';
    echo '<td>'.$row['ot_comment'].'</td>';
    echo '<td>'.$row['isApproved'].'</td>';
}
?>

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End nested tabs -->
            </div>

            <div>
                 <div class="tabs">
                    <div class="tabs-nav">
                        <ul>
                            <li class="is-active">Apply for OB</li>
                            <li>My OB</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="is-active">
                            <form action="OBAction.php" method="post">
                                <ul class="wrapper">
                                    <h3>Enter Desired Employee ID</h3>
                                    <li class="form-row">
                                        <label for="">Employee ID</label>
                                        <input type="text" name="emp_id">
                                    </li>
                                </ul>

                                <ul class="wrapper">
                                    <h3>Location</h3>
                                    <li class="form-row">
                                        <label for="">Depart From</label>
                                        <input type="text" name="from_dept" >
                                    </li>
                                    <li class="form-row">
                                        <label for="">Arrive To</label>
                                        <input type="text" name = "to_dept" >
                                    </li>
                                </ul>

                                <ul class="wrapper">
                                    <h3>Duration</h3>
                                    <li class="form-row">
                                        <label for="">Time From</label>
                                        <input type="datetime-local" name="from_time" id="">
                                    </li>
                                    <li class="form-row">
                                        <label for="">Time To</label>
                                        <input type="datetime-local" name="to_time" id="">
                                    </li>
                                </ul>

                                <ul class="wrapper">
                                    <h3>OB Purpose</h3>
                                    <li class="form-row">
                                        <label for="">Purpose</label>
                                        <input type="text" name = "purpose" >
                                    </li>
                                </ul>

                                <input  type = "submit" name="submit" value="Submit">
            
                        </div>
                        <div>
                            <table class="table hover" id="resultTable">

                                <thead>
                                    <tr>
                                       <center><H1> PENDING REQUESTS </H1></center>  
                                        <th rowspan="1" style="width:24%"><span class="headerCell">OB FORM ID</span></th> 
                                        <th rowspan="1" style="width:18%"><span class="headerCell">Employee ID</span></th>
                                        <th rowspan="1" style="width:10%"><span class="headerCell">FROM DEPARTURE</span></th>
                                        <th rowspan="1" style="width:12%"><span class="headerCell">TO DEPARTURE</span></th>
                                        <th rowspan="1" style="width:9%"><span class="headerCell">PURPOSE</span></th>
                                        <th rowspan="1" style="width:12%"><span class="headerCell">FROM TIME</span></th>
                                        <th rowspan="1" style="width:17%"><span class="headerCell">TO TIME</span></th>
                                        <th rowspan="1" style="width:10%"><span class="headerCell">STATUS</span></th>
                                    </tr>
                                </thead>
                                  

                                <tbody>

                                    <tr>
                                        <td colspan="8"></td>


                                    <?php
include 'DBConnection.php';


$sql       = 'select * from obform where status = "pending"';
$results   = mysqli_query($connection, $sql);
$row_count = mysqli_num_rows($results);
$id = 0;

while ($row = mysqli_fetch_array($results)) {
    echo '<tr><td><a href="OBApprove.php?id='.$row['obid'].'">'.$row['obid'].'</a></td></tr>';
    echo '<td>'.$row['emp_id'].'</td>';
    echo '<td>'.$row['dept_from'].'</td>';
    echo '<td>'.$row['dept_to'].'</td>';
    echo '<td>'.$row['purpose'].'</td>';
    echo '<td>'.$row['dept_time'].'</td>';
    echo '<td>'.$row['return_time'].'</td>';
    echo '<td>'.$row['status'].'</td>';
}
?>
                                    </tr>
                                </tbody>
                            </table>

                                  <table class="table hover" id="resultTable">

                                <thead>
                                    <tr>
                                      <center><H1> COMPLETED REQUESTS </H1></center>  
                                        <th rowspan="1" style="width:24%"><span class="headerCell">OB FORM ID</span></th> 
                                        <th rowspan="1" style="width:18%"><span class="headerCell">Employee ID</span></th>
                                        <th rowspan="1" style="width:10%"><span class="headerCell">FROM DEPARTURE</span></th>
                                        <th rowspan="1" style="width:12%"><span class="headerCell">TO DEPARTURE</span></th>
                                        <th rowspan="1" style="width:9%"><span class="headerCell">PURPOSE</span></th>
                                        <th rowspan="1" style="width:12%"><span class="headerCell">FROM TIME</span></th>
                                        <th rowspan="1" style="width:17%"><span class="headerCell">TO TIME</span></th>
                                        <th rowspan="1" style="width:10%"><span class="headerCell">STATUS</span></th>
                                    </tr>
                                </thead>
                                  

                                <tbody>

                                    <tr>
                                        <td colspan="8"></td>
                                    </tr>

                                                                        <?php
include 'DBConnection.php';


$sql       = 'select * from obform';
$results   = mysqli_query($connection, $sql);
$row_count = mysqli_num_rows($results);
$id = 0;

while ($row = mysqli_fetch_array($results)) {
    echo '<tr><td>'.$row['obid'].'</a></td></tr>';
    echo '<td>'.$row['emp_id'].'</td>';
    echo '<td>'.$row['dept_from'].'</td>';
    echo '<td>'.$row['dept_to'].'</td>';
    echo '<td>'.$row['purpose'].'</td>';
    echo '<td>'.$row['dept_time'].'</td>';
    echo '<td>'.$row['return_time'].'</td>';
    echo '<td>'.$row['status'].'</td>';
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>

</html>