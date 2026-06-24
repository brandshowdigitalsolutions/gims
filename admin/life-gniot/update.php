<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Life @ Gniot has been added.",
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
            text: "Life @ Gniot has not been added. Please try again.",
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
            text: "Life @ Gniot has been updated.",
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
            text: "Life @ Gniot has not been updated. Please try again.",
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
            text: "Life @ Gniot has been deleted.",
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
            text: "Life @ Gniot has not been deleted. Please try again.",
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
$getalbum = mysqli_query($conn, "select * from  tbl_lifegniot where id = '".$id."'");
if(mysqli_num_rows($getalbum) > 0)
{
    $isAlbum = true;
    $rowalbum = mysqli_fetch_assoc($getalbum);
    
    $id=$rowalbum['id'];
    $title = $rowalbum['title'];
    $location = $rowalbum['location'];
    $description = $rowalbum['description'];
    $date = $rowalbum['date'];
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
        <li>Life @ Gniot</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="life-gniot.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Life @ Gniot</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from tbl_lifegniot");
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
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Life@Gniot</h2>
            </div>
            <div class="box-content">
                    <div id="txtHint"></div>
                    <form class="form-horizontal" name="frm1" enctype='multipart/form-data' action="life-gniot/insertlifegniot.php?action=update" method="post" onsubmit="return validate1();">
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Title</label>
                            <div class="controls">
                                <input type="text" class="span6" id="title" name="title" value="<?php echo $rowalbum['title']?>">
                                
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Location</label>
                            <div class="controls">
                                <input type="text" class="span6" id="loc" name="loc" value="<?php echo $rowalbum['location']?>">
                                
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="full_heading">Description</label>
                            <div class="controls">
                                
                                <textarea name="description" class="ckeditor span6"><?php echo $rowalbum['description']?></textarea>
                                
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
                            <label class="control-label" for="hlink">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on span6" id="files" type="file" name="files[]" multiple> image Should be 600 X 600<br/>
                                <?php
                                    $eximg=explode(",",$rowalbum['image']);
                                    for($i=0;count($eximg)-1>$i;$i++){ ?>
                                     <img src="../../lifegniotimg/<?php echo $eximg[$i]?>" style="width:30px;"><a onclick="deleteimg('<?php echo $eximg[$i]?>','<?php echo $rowalbum['id']?>')">X</a>&nbsp;&nbsp;   
                                        
                                  <?php 
                                  }
                                
                                ?>
                                
                                
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
function deleteimg(str,id){
    //alert(str);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            
            if (this.readyState == 4 && this.status == 200) {
                //alert("hello");
                alert(this.responseText);
                window.location="life-gniot.php?m=10";
                
            }
        };
        xmlhttp.open("GET","https://www.gniotgroup.edu.in/demo/admin/life-gniot/deleteimage.php?q="+str+"&id="+id,true);
        xmlhttp.send();
            
}

</script>
