<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Campus Drive has been added.",
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
            text: "Campus Drive has not been added. Please try again.",
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
            text: "Campus Drive has been updated.",
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
            text: "Campus Drive has not been updated. Please try again.",
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
            text: "Campus Drive has been deleted.",
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
            text: "Campus Drive has not been deleted. Please try again.",
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
            text: "Invalid Image. Only jpg,JPG,JPEG,jpeg,png,PNG,GIF,gif Files allowed",
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
            text: "image has been added.",
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
            text: "image has not been added. Please try again.",
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
            text: "image has been deleted.",
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
            text: "image has not been deleted. Please try again.",
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
            text: "image not found.",
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
$getalbum = mysqli_query($conn, "select * from  tbl_campusdrive where id = '".$id."'");
if(mysqli_num_rows($getalbum) > 0)
{
    $isAlbum = true;
    $rowalbum = mysqli_fetch_assoc($getalbum);
    
    $id=$rowalbum['id'];
    $title = $rowalbum['title'];
    $package = $rowalbum['package'];
    $date = $rowalbum['date'];
    $time = $rowalbum['time'];
    $images = $rowalbum['image'];
    
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
        <li>Campus Drive</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="Campus Drive.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Campus Drive</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from tbl_campusdrive");
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
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Campus Drive</h2>
            </div>
            <div class="box-content">
               
                    <form class="form-horizontal" name="frm1" enctype='multipart/form-data' action="campusdrive/insertcampusdrive.php?action=update" method="post" onsubmit="return validate1();">
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Title</label>
                            <div class="controls">
                                <input type="text" class="span6" id="title" name="title" value="<?php echo $rowalbum['title']?>">
                                <input type="hidden" class="span6" id="id" name="id" value="<?php echo $rowalbum['id']?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="Date">Date</label>
                            <div class="controls">
                                <input class="datepicker input-file uniform_on span6" id="newsdate" type="text" name="newsdate" value="<?php echo $rowalbum['date']?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Date">Time</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="time" type="text" name="time" value="<?php echo $rowalbum['time']?>">Time Should be hh:mm
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="hlink">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="files" type="file" name="files"> image Should be 90 X 90<br/>
                                <img src="../campusdrive/<?php echo $rowalbum['image']?>" style="width:30px;">
                            </div>
                        </div>
                        
                        <!--<div class="control-group">
                            <label class="control-label" for="hlink">Package</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="package" type="text" name="package" value="<?php echo $rowalbum['package']?>">
                            </div>
                        </div>-->
                        <div class="control-group">
                            <label class="control-label" for="hlink">Location</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="campus" type="text" name="campus" value="<?php echo $rowalbum['campus']?>">
                            </div>
                        </div>
                        

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <input type="reset" onclick="window.location='https://www.gniotgroup.edu.in/admin/campusdrive.php';return false;" class="btn" value="cancel">
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
