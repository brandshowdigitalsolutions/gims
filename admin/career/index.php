<?php
session_start();
require_once('dbc.php');
$role=$_SESSION['role'] ;
$username=$_SESSION['username'];
?>

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
            text: "Invalid Image. Only jpg,jpeg,JPG,JPEG.PNG,png,gif and GIF allowed",
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
            text: "Image has been added.",
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
            text: "Image has not been added. Please try again.",
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
}else if($m == "13")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Title Already exist.Please Try Another title.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}else if($m == "26")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Please Enter Description.",
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>Career</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                
                <a href="career.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>View</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from careeer_empreg");
                    $rowalbumcount = mysqli_fetch_assoc($getalbumcount);
                    $albumcount = $rowalbumcount['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $albumcount; ?></span>
                </a>
                <a href="career.php?option=export" class="quick-button-small span1">
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
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Career</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable" id="example">
                    <thead>
                    <tr>
                    <th>Sr. No.</th>    
                    <th>ID</th>
                    <th>Position</th>
                     <th>Post</th>
                     <th>Dept</th>
                     <th>Name</th>
                     <th>Phone</th>
                     <th>Email</th>
                     <th>Gender</th>
                     <th>Address</th>
                     <th>Dob</th>
                     <th>U Degree</th>
                     <th>U Year</th>
                     <th>U Board</th>
                     <th>U Institute</th>
                     <th>Mode</th>
                     <th>U Percentage</th>
                     <th>U Div</th>
                     <th>U Specialization</th>
                     <th>Pg Degree</th>
                     <th>Pg Year</th>
                     <th>Pg Board</th>
                     <th>Pg Institute</th>
                     <th>Pg Mode</th>
                     <th>Pg Percentage</th>
                     <th>Pg Div</th>
                     <th>Pg Specialization</th>
                     <th>Phd Year</th>
                     <th>Phd Board</th>
                     <th>Phd Institute</th>
                     <th>Phd Mode</th>
                     <th>Phd Percentage</th>
                     <th>Other Degree</th>
                     <th>Other Year</th>
                     <th>Other Board</th>
                     <th>Other Institute</th>
                     <th>Other Mode</th>
                     <th>Other Percentage</th>
                     <th>Other Div</th>
                     <th>Other Specialize</th>
                     <th>Bio</th>
                     <th>CV</th>
                     <th>Expected Salary</th>
                     <th>pancard</th>
                     <th>Aadhar Card</th>
                     <th>ip</th>
                     <th>Location</th>
                     <th>Date</th>
                     
                    
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    $getalbums = mysqli_query($conn,"select * from careeer_empreg ORDER BY id desc");
                        while($rowalbums = mysqli_fetch_assoc($getalbums))
                        {
                            
                        ?>
                    <tr>
                     <td><?php echo $i;?></td>   
                    <td><?php echo $rowalbums['id'];?></td>
                    <td><?php echo $rowalbums['position'];?></td>
                     <td><?php echo $rowalbums['post'];?></td>
                      <td><?php echo $rowalbums['dept'];?></td>
                       <td><?php echo $rowalbums['fname'].$rowalbums['lname'];?></td>
                        <td><?php echo $rowalbums['phone'];?></td>
                         <td><?php echo $rowalbums['email'];?></td>
                          <td><?php echo $rowalbums['gender'];?></td>
                           <td><?php echo $rowalbums['address'];?></td>
                            <td><?php echo $rowalbums['dob'];?></td>
                             <td><?php echo $rowalbums['u_degree'];?></td>
                              <td><?php echo $rowalbums['u_year'];?></td>
                               <td><?php echo $rowalbums['u_board'];?></td>
                                <td><?php echo $rowalbums['u_institute'];?></td>
                                 <td><?php echo $rowalbums['u_percentage'];?></td>
                                  <td><?php echo $rowalbums['u_div'];?></td>
                                   <td><?php echo $rowalbums['u_specialization'];?></td>
                                    <td><?php echo $rowalbums['pg_degree'];?></td>
                                     <td><?php echo $rowalbums['pg_year'];?></td>
                                      <td><?php echo $rowalbums['pg_board'];?></td>
                                       <td><?php echo $rowalbums['pg_institute'];?></td>
                                        <td><?php echo $rowalbums['pg_mode'];?></td>
                                        <td><?php echo $rowalbums['pg_percentage'];?></td>
                                        <td><?php echo $rowalbums['pg_div'];?></td>
                                        <td><?php echo $rowalbums['pg_specialization'];?></td>
                                        <td><?php echo $rowalbums['phd_year'];?></td>
                                        <td><?php echo $rowalbums['phd_board'];?></td>
                                        <td><?php echo $rowalbums['phd_institute'];?></td>
                                        <td><?php echo $rowalbums['phd_percentage'];?></td>
                                        <td><?php echo $rowalbums['other_degree'];?></td>
                                        <td><?php echo $rowalbums['other_year'];?></td>
                                        <td><?php echo $rowalbums['other_board'];?></td>
                                        <td><?php echo $rowalbums['other_institute'];?></td>
                                        <td><?php echo $rowalbums['other_mode'];?></td>
                                        <td><?php echo $rowalbums['other_percentage'];?></td>
                                        <td><?php echo $rowalbums['other_div'];?></td>
                                        <td><?php echo $rowalbums['other_specialize'];?></td>
                                        <td><?php echo $rowalbums['bio'];?></td>
                                        <td><?php echo $rowalbums['cv'];?></td>
                                        <td><?php echo $rowalbums['expected_salary'];?></td>
                                        <td><?php echo $rowalbums['pancard'];?></td>
                                        <td><?php echo $rowalbums['aadharcard'];?></td>
                                        <td><?php echo $rowalbums['ip'];?></td>
                                        <td><?php echo $rowalbums['location'];?></td>
                                        <td><?php echo $rowalbums['submit'];?></td>
                                        
                               
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
