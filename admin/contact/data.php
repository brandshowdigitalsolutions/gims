<?php
require_once('dbc.php');
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=contact_export.xls");

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
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>IP</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $getuglandingpage = mysqli_query($conn,"select * from contact where date between '$fdate' AND '$sdate' ");
                    while($rownotice = mysqli_fetch_assoc($getuglandingpage)) {                      
                    ?>
                     <tr> 
                     <td><?php echo $rownotice['name'];?></td>
                     <td><?php echo $rownotice['email'];?></td>
                     <td><?php echo $rownotice['mobile'];?></td>
                     <td><?php echo $rownotice['message'];?></td>
                     <td><?php echo $rownotice['ip'];?></td>
                     <td><?php echo date("j F, Y, g:i a", strtotime($rownotice["date"])); ?></td>   
                     </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
    </div>
