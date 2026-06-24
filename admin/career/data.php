<?php
session_start();
$role=$_SESSION['role'] ;
$username=$_SESSION['username'];

require_once('dbc.php');

header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=gniot_career_export.xls");

if(isset($_POST['submit']))
{
    $first_date=$_POST['first_date'];
    $second_date=$_POST['second_date'];
    echo $fdate= date("Y-m-d", strtotime($first_date));
    echo $sdate = date ("Y-m-d", strtotime("+1 day", strtotime($second_date)));
   
}
?>
    <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
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
                    $getuglandingpage = mysqli_query($conn,"select * from careeer_empreg where submit between '$fdate' AND '$sdate' ");
                    while($rowalbums = mysqli_fetch_assoc($getuglandingpage)) 
                    {                      
                    ?>
                     <tr> 
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
                    }
                    ?>
                    </tbody>
                </table>
    </div>
