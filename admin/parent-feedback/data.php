<?php
require_once('dbc.php');
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=parentfeedback_export.xls");

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
                        <th>Date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Ward Name</th>
                        <th>Ward Branch</th>
                        <th>Year Of Passing</th>
                        <th>Session</th>
                        <th>Teaching Learning Environment</th>
                        <th>Teacher's Accessibility to your ward</th>
                        <th>College Administration Support</th>
                        <th>College Infrastructure</th>
                        <th>Library Facilities to Your ward</th>
                        <th>Discipline in the college premises</th>
                        <th>Sports Activities</th>
                        <th>Placement Activities</th>
                        <th>Personality Development of your ward</th>
                        <th>Grievance Redressal Mechanism</th>
                        <th>Provision of Career Oriented Training Programme</th>
                        <th>Suggestions for further Improvement (If any)</th>
                        <th>Ip</th>
                        <th>Location</th>
                        <th>Adding Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $getuglandingpage = mysqli_query($conn,"select * from parent_feedback where created between '$fdate' AND '$sdate' ");
                    while($rownotice = mysqli_fetch_assoc($getuglandingpage)) {                      
                    ?>
                     <tr> 
                     <td><?php echo $i;?></td>
                    
                    <td><?php echo $rownotice['date'];?></td>
                    <td><?php echo $rownotice['name'];?></td>
                    <td><?php echo $rownotice['phone'];?></td>
                    <td><?php echo $rownotice['email'];?></td>
                    <td><?php echo $rownotice['ward_name'];?></td>
                    <td><?php echo $rownotice['ward_branch'];?></td>
                    <td><?php echo $rownotice['yop'];?></td>
                    <td><?php echo $rownotice['session_name'];?></td>
                    <td><?php echo $rownotice['learning_env'];?></td>
                    <td><?php echo $rownotice['accessibility'];?></td>
                    <td><?php echo $rownotice['support'];?></td>
                    <td><?php echo $rownotice['college_infra'];?></td>
                    <td><?php echo $rownotice['library'];?></td>
                    <td><?php echo $rownotice['discipline'];?></td>
                    <td><?php echo $rownotice['sports'];?></td>
                    <td><?php echo $rownotice['placement'];?></td>
                    <td><?php echo $rownotice['persanality_dev'];?></td>
                    <td><?php echo $rownotice['grievance'];?></td>
                    <td><?php echo $rownotice['Provision'];?></td>
                    <td><?php echo $rownotice['Suggestions'];?></td>
                    <td><?php echo $rownotice['ip'];?></td>
                    <td><?php echo $rownotice['location'];?></td>
                    <td><?php echo $rownotice['created'];?></td>   
                     </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </tbody>
                </table>
    </div>
