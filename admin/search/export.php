<?php
require_once('dbc.php');
?>
<!-- start: Content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
$("#first_date").keypress(function(event) {event.preventDefault();});
    $( "#first_date" ).datepicker();

  });
  </script>
  <script>
  $(function() {
$("#second_date").keypress(function(event) {event.preventDefault();});
    $( "#second_date" ).datepicker();

  });
  </script>
<div id="content" class="span10">


     <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>Alumni Page</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
            <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
              <div class="box-content">
                <a href="placement.php" class="quick-button-small span1">
                    <i class="icon-bullhorn"></i>
                    <p>View</p>
                    <?php
                     $getug_page = mysqli_query($conn, "select count(id) as cn from user_signup");
                     $rowug_page_count = mysqli_fetch_assoc($getug_page);
                     $contact = $rowug_page_count['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $contact; ?></span>
                </a>
                <a href="placement.php?option=export" class="quick-button-small span1">
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
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Export</h2>
            </div>
            <div class="box-content">
                    <div>
                    <form method="post" action="placement/data.php">
                    <div class="control-group">
                            <label class="control-label" for="notice">From Date</label>
                            <div class="controls">
                            <input type="text" class="span6" id="first_date" name="first_date" autocomplete="off" required="required">
                            </div>
                    </div>
                        <div class="control-group">
                            <label class="control-label" for="notice">To Date</label>
                            <div class="controls">
                                <input type="text" class="span6" id="second_date" name="second_date" autocomplete="off" required="required">
                            </div>
                        </div>
                        <input type="submit" name="submit"></input>
                        </form>
                        </div>
                   
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
