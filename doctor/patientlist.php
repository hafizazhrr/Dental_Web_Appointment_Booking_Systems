<?php
session_start();
include_once '../assets/conn/dbconnect.php';
// include_once 'connection/server.php';
if(!isset($_SESSION['doctorSession']))
{
header("Location: ../index.php");
}
$usersession = $_SESSION['doctorSession'];
$res=mysqli_query($con,"SELECT * FROM doctor WHERE doctorId=".$usersession);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">

    <title>APPOINTMENT SYS</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap1.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/time/bootstrap-clockpicker.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    
    <!-- Custom styles for this template -->
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    
    <script src="assets/js/chart-master/Chart.js"></script>
  </head>

  <body>

  <section id="container" >
      <!-- ******************* TOP BAR CONTENT & NOTIFICATIONS ************************ -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>APPOINTMENT SYSTEM</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php?logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- *********************MAIN SIDEBAR MENU********************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $userRow['doctorFirstName'];?> <?php echo $userRow['doctorLastName'];?></h5>
                    
                  <li class="mt">
                      <a href="doctordashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span><b>DASHBOARD</b></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="addschedule.php" >
                          <i class="fa fa-desktop"></i>
                          <span><b>DOCTOR SCHEDULE</b></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="patientlist.php" >
                          <i class="fa fa-cogs"></i>
                          <span><b>PATIENT LIST</b></span>
                      </a>
                  </li>

                  
                  <li class="sub-menu">
                      <a href="new.php" >
                          <i class="fa fa-cogs"></i>
                          <span><b>REGISTER PATIENT</b></span>
                      </a>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **************** MAIN CONTENT ****************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper"><br>
            <!-- panel start -->
              <!-- panel heading starat -->
               <!-- panel start -->
                    <div class="panel panel-primary filterable">
               <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">List of Patients</h3>
                            <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
                        </div>
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="IC NUMB" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="NAME" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="PASSWORD" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="NO. TEL." disabled></th>
                                    <!-- <th><input type="text" class="form-control" placeholder="Email" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder="GENDER" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="BIRTHDATE" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="ADDRESS" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="REMOVE" disabled></th>
                                </tr>
                            </thead>
                            
                            <?php 
                            $result=mysqli_query($con,"SELECT * FROM patient");
                            
                            while ($patientRow=mysqli_fetch_array($result)) {
                                
                              
                                echo "<tbody>";
                                echo "<tr>";
                                    echo "<td>" . $patientRow['icPatient'] . "</td>";
                                    echo "<td>" . $patientRow['patientFirstName'] . $patientRow['patientLastName'] ."</td>";
                                    echo "<td>" . $patientRow['password'] . "</td>";
                                    echo "<td>" . $patientRow['patientPhone'] . "</td>";
                                    // echo "<td>" . $patientRow['patientEmail'] . "</td>";
                                    echo "<td>" . $patientRow['patientGender'] . "</td>";
                                    echo "<td>" . $patientRow['patientDOB'] . "</td>";
                                    echo "<td>" . $patientRow['patientAddress'] . "</td>";
                                    echo "<form method='POST'>";
                                    echo "<td class='text-center'><a href='#' id='".$patientRow['icPatient']."' class='delete'>DELETE</span></a>
                            </td>";
                               
                            } 
                                echo "</tr>";
                           echo "</tbody>";
                       echo "</table>";
                      
                        echo "</div>";
                        echo "</div>";
                        ?>
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->

                </div>
            </div>
      </section> 
    </section><!--main content start-->

     <!-- jQuery -->
        <script src="../patient/assets/js/jquery.js"></script>
        <script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var ic = element.attr("id");
var info = 'ic=' + ic;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "deletepatient.php",
   data: info,
   success: function(){
 }
});
  $(this).parent().parent().fadeOut(300, function(){ $(this).remove();});
 }
return false;
});
});
</script>
 <script type="text/javascript">
            /*
            Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
            */
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                    $filters = $panel.find('.filters input'),
                    $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                    inputContent = $input.val().toLowerCase(),
                    $panel = $input.parents('.filterable'),
                    column = $panel.find('.filters th').index($input.parents('th')),
                    $table = $panel.find('.table'),
                    $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="../patient/assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-clockpicker.js"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
  </body>
</html>
