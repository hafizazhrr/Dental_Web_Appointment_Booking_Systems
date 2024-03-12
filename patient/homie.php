<?php
session_start();
include_once '../assets/conn/dbconnect.php';
if(!isset($_SESSION['patientSession']))
{
header("Location: ../login.php");
}

$usersession = $_SESSION['patientSession'];


$res=mysqli_query($con,"SELECT * FROM patient WHERE icPatient=".$usersession);

if ($res===false) {
	echo mysql_error();
} 

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DR FEELIZ KERAMAT</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link href="assets/css/material.css" rel="stylesheet">
	<link href="assets/css/default/style.css" rel="stylesheet">
	<link href="assets/css/default/blocks.css" rel="stylesheet">
	<link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
	<link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="homie.php">HOME</a></li>
				<li ><a href="patient.php">APPOINTMENT</a></li>
				<li><a href="patientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>">REMINDER</a></li>
				<li><a href="patientlogout.php?logout">LOG OUT</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">       
			</div>
		</div>
	</div>
	<!-- Page header end -->

	<!-- 1st section start -->
		<section >
			<div class="container">
            <img src="img/banner.png" alt="">
            <?php
                echo "<div class='container'>";
                echo "<div class='row'>";
                echo "<div class='page-header'>";
                echo "<h1>Offered Services </h1>";
                echo "</div>";
                echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>List of Services</div>";
                echo "<div class='panel-body'>";
                echo "<table class='table table-hover'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Services</th>";
                echo "<th>Price Range</th>";
                echo "</tr>";
                echo "<th>Dental Diagnostic</th>";
                echo "<th>RM0-200</th>";
                echo "</tr>";
				echo "</tr>";
				echo "<th>Periodontics</th>";
				echo "<th>RM60-2800</th>";
				echo "</tr>";
				echo "<th>Restorations</th>";
				echo "<th>RM60-800</th>";
				echo "</tr>";
				echo "<th>Oral Surgery</th>";
				echo "<th>RM80 and above</th>";
				echo "</tr>";
				echo "<th>Orthodontics</th>";
				echo "<th>RM5500 and above</th>";
				echo "</tr>";
				echo "<th>Crown and Bridge</th>";
				echo "<th>RM100-1800</th>";
				echo "</tr>";
				echo "<th>Endodontics</th>";
				echo "<th>RM200 and above</th>";
				echo "</tr>";
				echo "<th>Implants</th>";
				echo "<th>RM2500 and above</th>";
				echo "</tr>";
				echo "<th>Dentures</th>";
				echo "<th>RM100 and above</th>";
				echo "</tr>";
				echo "<th>Teeth Whitening</th>";
				echo "<th>RM600-1800</th>";
				echo "</tr>";
				echo "<th>Miscellaneous</th>";
				echo "<th>RM40 and above</th>";
                echo "</tbody>";
                echo "</table>";
		?>
	<!-- /.row -->
			</div>
		</section>
		

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/date/bootstrap-datepicker.js"></script>
	<script src="assets/js/moment.js"></script>
	<script src="assets/js/transition.js"></script>
	<script src="assets/js/collapse.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- date start -->
		<script>
		$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
		format: 'yyyy-mm-dd',
		container: container,
		todayHighlight: true,
		autoclose: true,
		})
		})
		</script>
		<!-- date end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2023 All rights reserved.</a></h2>
	</footer>
	<!-- Footer section end -->

</body>
</html>
