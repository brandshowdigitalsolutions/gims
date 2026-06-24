<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Life@Gniot has been added.",
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
            text: "Life@Gniot has not been added. Please try again.",
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
            text: "Life@Gniot has been updated.",
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
            text: "Life@Gniot has not been updated. Please try again.",
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
            text: "Life@Gniot has been deleted.",
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
            text: "Life@Gniot has not been deleted. Please try again.",
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
            text: "Invalid FIle. Only jpg,JPG,JPEG,jpeg,gif,GIF,PNG and png allowed",
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
            text: "Images has been deleted.",
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
            text: "Images has not been deleted. Please try again.",
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
            text: "Images not found.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}else if($m == "21")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Please Enter Title.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}else if($m == "24")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Please Select Date.",
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
        <li>Campus Drive</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="life-gniot.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Life@Gniot</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from tbl_lifegniot");
                    $rowalbumcount = mysqli_fetch_assoc($getalbumcount);
                    $albumcount = $rowalbumcount['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $albumcount; ?></span>
                </a>
                <a href="life-gniot.php?option=add" class="quick-button-small span1">
                    <i class="icon-plus-sign "></i>
                    <p>Add Life@gniot</p>
                </a>
              
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Life@gniot</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" name="frm1" enctype='multipart/form-data' action="life-gniot/insertlifegniot.php?action=add" method="post" onsubmit="return validate1();">
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Title</label>
                            <div class="controls">
                                <input type="text" class="span6" id="title" name="title">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Location</label>
                            <div class="controls">
                                <input type="text" class="span6" id="loc" name="loc">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Description</label>
                            <div class="controls">
                               <textarea name="description" Placeholder="Description" class="ckeditor"></textarea>
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="Date">Date</label>
                            <div class="controls">
                                <input class="datepicker input-file uniform_on span6" id="newsdate" type="text" name="newsdate" >
                            </div>
                        </div>
                       
                        <div class="control-group">
                            <label class="control-label" for="hlink">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="files" type="file" name="files[]" multiple> image Should be 600 X 600
                            </div>
                        </div>
                        
                        

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <input type="reset" onclick="window.location='https://www.gniotgroup.edu.in/admin/life-gniot.php';return false;" class="btn" value="cancel">
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
<script type="text/javascript">
            $(function () {
                $('.datepicker').datetimepicker({format: 'yyyy-mm-dd hh:ii'});
            });
        </script>
