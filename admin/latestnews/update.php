<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Latest News has been added.",
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
            text: "Latest News has not been added. Please try again.",
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
            text: "Latest News has been updated.",
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
            text: "Latest News has not been updated. Please try again.",
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
            text: "Latest News has been deleted.",
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
            text: "Latest News has not been deleted. Please try again.",
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
$getalbum = mysqli_query($conn, "select * from  tbl_latest_news where id = '".$id."'");
if(mysqli_num_rows($getalbum) > 0)
{
    $isAlbum = true;
    $rowalbum = mysqli_fetch_assoc($getalbum);
    
    $id=$rowalbum['id'];
    $title = $rowalbum['title'];
    $location = $rowalbum['location'];
    $sdescription = $rowalbum['sdescription'];
    $description = $rowalbum['description'];
    $date = $rowalbum['date'];
    $images = $rowalbum['images'];
    
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
                <a href="latest-news.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Latest News</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from tbl_latest_news");
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
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Latest News</h2>
            </div>
            <div class="box-content">
               
                    <form class="form-horizontal" name="frm1" enctype='multipart/form-data' action="latestnews/insertnews.php?action=update" method="post" onsubmit="return validate1();">
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Tittle</label>
                            <div class="controls">
                                <input type="text" class="span6" id="title" name="title" value="<?php echo $title;?>" disabled>
                                <input type="hidden" class="span6" id="id" name="id" value="<?php echo $id;?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Location</label>
                            <div class="controls">
                                <input type="text" class="span6" id="loc" name="loc" value="<?php echo $location;?>">
                            </div>
                        </div>
                        
                        
                        
                         <div class="control-group">
                            <label class="control-label" for="description">Short Description</label>
                            <div class="controls">
                                <textarea name="sdescription" id="sdescription" class="ckeditor input-file uniform_on span6" ><?php echo $sdescription;?></textarea>
                            </div>
                        </div>  
                          
                        <div class="control-group">
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">
                                <textarea name="description" id="description" class="ckeditor input-file uniform_on span6" ><?php echo $description;?></textarea>
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="Date">Date</label>
                            <div class="controls">
                                <input class="datepicker input-file uniform_on span6" id="newsdate" type="text" name="newsdate" value="<?php echo $date;?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="hlink">Images</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="files" type="file" name="files[]" multiple><br/>
                                <?php $imgex=explode(",",$images);
                                    
                                    for($i=0; count($imgex)-1>$i;$i++){?>
                                       <img src="../../latestnews/<?php echo $imgex[$i]?>" width="50px">, 
                                    <?php }
                                ?>
                            </div>
                        </div>
                        

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <input type="reset" onclick="window.location='https://www.gniotgroup.edu.in/admin/latest-news.php';return false;" class="btn" value="cancel">
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
