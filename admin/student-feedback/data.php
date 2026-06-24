<?php
require_once('dbc.php');
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=studentfeedback_export.xls");

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
                        <th>Email</th>
                        <th>College</th>
                        <th>date</th>
                        <th>course</th>
                        <th>course_int</th>
                        <th>topics</th>
                        <th>covered</th>
                        <th>difficulty</th>
                        <th>objective</th>
                        <th>material</th>
                        <th>session</th>
                        <th>teaching</th>
                        <th>ideas</th>
                        <th>methodology</th>
                        <th>ip</th>
                        <th>location</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $getuglandingpage = mysqli_query($conn,"select * from student_feedback where 	created between '$fdate' AND '$sdate' ");
                    while($rownotice = mysqli_fetch_assoc($getuglandingpage)) {                      
                    ?>
                     <tr> 
                    <td><?php echo $i;?></td>
                    
                    <td><?php echo $rownotice['name'];?></td>
                    <td><?php echo $rownotice['email'];?></td>
                    <td><?php echo $rownotice['college'];?></td>
                    <td><?php echo $rownotice['date'];?></td>
                    <td><?php echo $rownotice['course'];?></td>
                    <td><?php echo $rownotice['course_int'];?></td>
                    <td><?php echo $rownotice['topics'];?></td>
                    <td><?php echo $rownotice['covered'];?></td>
                    <td><?php echo $rownotice['difficulty'];?></td>
                    <td><?php echo $rownotice['objective'];?></td>
                    <td><?php echo $rownotice['material'];?></td>
                    <td><?php echo $rownotice['session'];?></td>
                    <td><?php echo $rownotice['teaching'];?></td>
                    <td><?php echo $rownotice['ideas'];?></td>
                    <td><?php echo $rownotice['methodology'];?></td>
                    <td><?php echo $rownotice['ip'];?></td>
                    <td><?php echo $rownotice['location'];?></td>
                     </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </tbody>
                </table>
    </div>
