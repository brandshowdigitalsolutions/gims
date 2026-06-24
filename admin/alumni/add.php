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
        <li>Placement</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="placement.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Placement</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from getplace");
                    $rowalbumcount = mysqli_fetch_assoc($getalbumcount);
                    $albumcount = $rowalbumcount['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $albumcount; ?></span>
                </a>
                <a href="placement.php?option=add" class="quick-button-small span1">
                    <i class="icon-plus-sign "></i>
                    <p>Add Placement</p>
                </a>
              
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Placement</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" name="frm1" action="placement/galleryprocess.php?action=add" method="post" onsubmit="return validate1();">
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Placement Heading</label>
                            <div class="controls">
                                <input type="text" class="span6" id="full_heading" name="full_heading">
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="Venue_of_Drive">Venue </label>
                            <div class="controls">
                                <input type="text" class="span6" id="Venue_of_Drive" name="Venue_of_Drive">
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="Skills_required">Skills</label>
                            <div class="controls">
                                <input type="text" class="span6" id="Skills_required" name="Skills_required">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">
                                <textarea name="description" id="description" class="input-file uniform_on" ></textarea>
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="Date">Date</label>
                            <div class="controls">
                                <input class="input-file uniform_on" id="Dates" type="text" name="Date" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="hlink">Hyper link</label>
                            <div class="controls">
                                <input class="input-file uniform_on" id="hlink" type="text" name="hlink">
                            </div>
                        </div>
                        

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn">Cancel</button>
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
