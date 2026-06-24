<?php
require_once('dbc.php');
header("Content-type: application/vnd-ms-excel");

    date_default_timezone_set("Asia/Kolkata");

// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=gniot_alumni_export.xls");

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
                        
                        <th>Rollno</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Branch</th>
                        <th>Permant Address</th>
                        
                        <th>Passing Year</th>
                        <th>Org Type</th>
                        <th>Org Name</th>
                        <th>Org Address</th>
                        <th>Org Phone</th>
                        <th>Designation</th>
                        <th>Date</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $getuglandingpage = mysqli_query($conn,"select * from user_signup where created between '$fdate' AND '$sdate'  ");
                    while($rownotice = mysqli_fetch_assoc($getuglandingpage)) {                      
                    ?>
                     <tr> 
                    
                    <td><?php echo $rownotice['roll_no'];?></td>
                    <td><?php echo $rownotice['name'];?></td>
                    <td><?php echo $rownotice['mobile'];?></td>
                    <td><?php echo $rownotice['email'];?></td>
                    <td><?php $sqlc=mysqli_query($conn,"select * from course_discipline where id='$rownotice[course]'");
                    while($row=mysqli_fetch_array($sqlc)){ 
                    echo $row['name'];
                    } ?>
                        </td>
                    <td><?php echo $rownotice['branch'];?></td>
                    <td><?php echo $rownotice['per_address'];?></td>
                    
                    <td><?php echo $rownotice['passing_year'];?></td>
                    <td><?php echo $rownotice['type'];?></td>
                    <td><?php echo $rownotice['org_name'];?></td>
                    <td><?php echo $rownotice['org_address'];?></td>
                    <td><?php echo $rownotice['org_phone'];?></td>
                    <td><?php echo $rownotice['designation'];?></td>
                    <td><?php echo date('d-m-Y h:i:s A', strtotime($rownotice["created"])); ?></td>   
                     </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
    </div>
