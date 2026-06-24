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
        <li>Contact</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="contact.php" class="quick-button-small span1">
                    <i class="icon-bullhorn"></i>
                    <p>View</p>
                    <?php
                     $contact_page = mysqli_query($conn, "select count(id) as cn from contact");
                     $page_count = mysqli_fetch_assoc($contact_page);
                     $contact_page = $page_count['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $contact_page; ?></span>
                </a>
                <a href="contact.php?option=export" class="quick-button-small span1">
                    <i class="icon-plus-sign"></i>
                    <p>Export</p>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Massege</th>
                        <th>Date</th>
                        <th>Ip</th>
                        
                      
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    $getlandingpage = mysqli_query($conn,"select * from contact order by id desc");
                    while($rownotice = mysqli_fetch_assoc($getlandingpage))
                    {  
                        
                    ?>
                    <tr>  
                    <td><?php echo $i;?></td>
                    
                    <td><?php echo $rownotice['name'];?></td>
                    <td><?php echo $rownotice['mobile'];?></td>
                    <td><?php echo $rownotice['email'];?></td>
                    <td><?php echo $rownotice['message'];?></td>
                    <td><?php echo $rownotice['date'];?></td>
                    <td><?php echo $rownotice['ip'];?></td>
                    
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
