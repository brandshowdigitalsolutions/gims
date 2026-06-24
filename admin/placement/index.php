<?php
session_start();
$role=$_SESSION['role'] ;
$username=$_SESSION['username'];
date_default_timezone_set("Asia/Kolkata");
?>

<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "placement has been added.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "0")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "placement has not been added. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "2")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "placement has been updated.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "3")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "placement has not been updated. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "4")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "placement has been deleted.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "5")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "placement has not been deleted. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "6")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image upload failed. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "7")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Invalid image. Only jpg, png and gif images allowed",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "8")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Images has been added.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "9")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Images has not been added. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "10")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image has been deleted.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "11")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image has not been deleted. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "12")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image not found.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
?>
<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>Alumni</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="gniot-alumni.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>View</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from user_signup");
                    $rowalbumcount = mysqli_fetch_assoc($getalbumcount);
                    $albumcount = $rowalbumcount['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $albumcount; ?></span>
                </a>
                <a href="gniot-alumni.php?option=export" class="quick-button-small span1">
                    <i class="icon-plus-sign "></i>
                    <p>Export</p>
                </a>
               
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Alumni</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        
                    <th>Sr.</th>    
                    <th>ID</th>
                    <th>Rollno</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Branch</th>
                     <th>Date</th>
                    <!--<th>Actions</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $getalbums = mysqli_query($conn,"SELECT * FROM user_signup  ORDER BY created DESC");
                        $i=1;
                        while($rowalbums = mysqli_fetch_array($getalbums))
                        {
                        ?>
                    <tr>
                    <td><?php echo $i;?></td>    
                    <td><?php echo $rowalbums['regid'];?></td>
                    <td><?php echo $rowalbums['roll_no'];?></td>
                    <td><?php echo $rowalbums['name'];?></td>
                    <td><?php echo $rowalbums['mobile'];?></td>
                    <td><?php echo $rowalbums['email'];?></td>
                    <td><?php $sqlc=mysqli_query($conn,"select * from course_discipline where id='$rowalbums[course]'");
                    while($row=mysqli_fetch_array($sqlc)){ 
                    echo $row['name'];
                    } ?>
                        
                        
                        </td>
                    <td><?php echo $rowalbums['branch'];?></td>
                   <td> <?php echo date('d-m-Y h:i:s A', strtotime($rowalbums["created"])); ?></td>
                                <!--<td class="center">
                                    <a href="placement.php?option=update&id=<?php echo $rowalbums['id']; ?>" class="btn btn-info">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                               
                                </td>-->
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
