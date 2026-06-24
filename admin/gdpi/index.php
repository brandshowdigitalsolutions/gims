<?php
require_once('dbc.php');

       session_start();
      
       $username=$_SESSION['username'];

?>
<!-- start: Content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>GDPI Leads</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="gdpi.php" class="quick-button-small span1">
                    <i class="icon-bullhorn"></i>
                    <p>View</p>
                    <?php
                     $contact_page = mysqli_query($conn, "select count(id) as cn from applicant_data");
                     $page_count = mysqli_fetch_assoc($contact_page);
                     $contact_page = $page_count['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $contact_page; ?></span>
                </a>
      
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white user"></i><span class="break"></span>View</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>S No.</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>F Name</th>
                        <th>F Contact</th>
                        <th>Graducation</th>
                        <th>Percentage</th>
                        <th>Location</th>
                        <th>Date</th>
                        
                      
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    $getlandingpage = mysqli_query($conn,"SELECT * FROM applicant_data ORDER BY id DESC");
                    while($rownotice = mysqli_fetch_assoc($getlandingpage))
                    {  
                        
                        $dateString = $rownotice['addedon'];

                        // Create a DateTime object from the given date string
                        $date = new DateTime($dateString);
                        
                        // Format the date as per the desired format
                        $formattedDate = $date->format('jS M Y g:i A');
                    ?>
                    <tr>  
                        <td><?php echo $i;?></td>
                        <td><?php echo $rownotice['name'];?></td>
                        <td><?php echo $rownotice['contact'];?></td>
                        <td><?php echo $rownotice['email'];?></td>
                        <td><?php echo $rownotice['father_name'];?></td>
                        <td><?php echo $rownotice['father_contact'];?></td>
                        <td><?php echo $rownotice['graduation_course'];?></td>
                        <td><?php echo $rownotice['graduation_percentage'];?></td>
                        <td><?php echo $rownotice['location'];?></td>
                        <td><?php echo $formattedDate;?></td>
                    </tr>
                    <?php
                        $i++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
