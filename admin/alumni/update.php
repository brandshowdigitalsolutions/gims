<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Newsevent has been added.",
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
            text: "Newsevent has not been added. Please try again.",
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
            text: "Newsevent has been updated.",
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
            text: "Newsevent has not been updated. Please try again.",
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
            text: "Newsevent has been deleted.",
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
            text: "Newsevent has not been deleted. Please try again.",
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

<?php
$id = (isset($_GET['id']) && $_GET['id'] !== "") ? $_GET['id'] : "";
$getalbum = mysqli_query($conn, "select * from  user_signup where id = '".$id."'");
if(mysqli_num_rows($getalbum) > 0)
{
    $isAlbum = true;
    $rowalbum = mysqli_fetch_assoc($getalbum);
    
    $id = $rowalbum['id'];
    $regid = $rowalbum['regid'];
    $roll_no = $rowalbum['roll_no'];
    $name = $rowalbum['name'];
    $mobile = $rowalbum['mobile'];
    $email = $rowalbum['email'];
    $per_address=$rowalbum['per_address'];
    $class=$rowalbum['class'];
    $passing_year = $rowalbum['passing_year'];
    $type = $rowalbum['type'];
    $org_name = $rowalbum['org_name'];
    $org_address = $rowalbum['org_address'];
    $org_phone=$rowalbum['org_phone'];
    $designation=$rowalbum['designation'];
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
                <a href="alumni.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Alumni</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from user_signup where email='$username'");
                    $rowalbumcount = mysqli_fetch_assoc($getalbumcount);
                    $albumcount = $rowalbumcount['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $albumcount; ?></span>
                </a>
             
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Alumni</h2>
            </div>
            <div class="box-content">
               
                    <form class="form-horizontal" name="frm1" action="alumni/galleryprocess.php?action=update" method="post" onsubmit="return validate1();" enctype="multipart/form-data">
                      
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="title">ID</label>
                                <div class="controls">
                                    <input type="text" class="span6" 
                                    name="regidddd" id="regid"  value="<?php echo $regid; ?>">
                                     <input type="hidden" class="span6" name="id"  value="<?php echo $id; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="Venue_of_Drive">Roll No</label>
                            <div class="controls">
                                <input type="text" class="span6" name="roll_no" id="roll_no"  value="<?php echo $roll_no; ?>" >
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="Skills_required">Name</label>
                            <div class="controls">
                                <input type="text" class="span6" name="name" id="name" value="<?php echo $name; ?>">
                            </div>
                        </div>
                                  <div class="control-group">
                                <label class="control-label" for="title">Mobile</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="mobile" id="phone"  value="<?php echo $mobile; ?>">
                                </div>
                            </div>
                    
                               <div class="control-group">
                                <label class="control-label" for="title">email</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="email" id="email" value="<?php echo $email; ?>">
                                </div>
                            </div>
                                            <div class="control-group">
                                <label class="control-label" for="title">Per address</label>
                                <div class="controls">
                                  <textarea name="per_address" id="per_address" class="input-file uniform_on" ><?php echo $per_address; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="Venue_of_Drive">Class</label>
                            <div class="controls">
                                <input type="text" class="span6" name="class" id="class" value="<?php echo $class; ?>" >
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="Skills_required"> Passing year</label>
                            <div class="controls">
                                <input type="text" class="span6" name="passing_year" id="passing_year" value="<?php echo $passing_year; ?>">
                            </div>
                        </div>
                                  <div class="control-group">
                                <label class="control-label" for="title">Org Type</label>
                                <div class="controls">

                                       <input type="text" class="span6" name="type" id="type" value="<?php echo $type; ?>">
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label" for="title">Org name</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="org_name" id="org_name" value="<?php echo $org_name; ?>">
                                </div>
                            </div>
                               <div class="control-group">
                                <label class="control-label" for="title"> Org address</label>
                                <div class="controls">

                                    <textarea name="org_address" id="org_address" class="input-file uniform_on" ><?php echo $org_address; ?></textarea>
                                </div>
                            </div>
                                  <div class="control-group">
                                <label class="control-label" for="title"> Org phone</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="org_phone" id="org_phone" value="<?php echo $org_phone; ?>">
                                </div>
                            </div>
                                    <div class="control-group">
                                <label class="control-label" for="title"> Designation</label>
                                <div class="controls">
                                    <input type="text" class="span6"  name="designation" id="designation"  value="<?php echo $designation; ?>">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button>
                                
                            </div>
                        </fieldset>
                    </form>
               
            </div>
        </div>
    </div>

</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
