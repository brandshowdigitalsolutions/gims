<?php
require_once('dbc.php');
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=facultyfeedback_export.xls");

if(isset($_POST['submit']))
{
    $first_date=$_POST['first_date'];
    $second_date=$_POST['second_date'];
    $fdate= date("Y-m-d", strtotime($first_date));
    $sdate = date ("Y-m-d", strtotime("+1 day", strtotime($second_date)));
   
}
?>
    <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Feedback</th>
                        <th>Ip</th>
                        <th>Location</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $getuglandingpage = mysqli_query($conn,"select * from faculty_feedback_form where created between '$fdate' AND '$sdate' ");
                    while($rownotice = mysqli_fetch_assoc($getuglandingpage)) {                      
                    ?>
                     <tr> 
                     <td><?php echo $i;?></td>
                    
                    <td><?php echo $rownotice['name'];?></td>
                    <td><?php echo $rownotice['dept'];?></td>
                    <td><?php echo $rownotice['deg'];?></td>
                    <td><?php echo $rownotice['phone'];?></td>
                    <td><?php echo $rownotice['email'];?></td>
                    <td><?php echo $rownotice['feedback'];?></td>
                    <td><?php echo $rownotice['ip'];?></td>
                    <td><?php echo $rownotice['location'];?></td>
                    <td><?php echo $rownotice['created'];?></td>  
                     </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
    </div>
