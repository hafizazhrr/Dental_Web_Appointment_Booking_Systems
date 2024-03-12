<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session=$_SESSION[ 'patientSession'];
$res=mysqli_query($con, "SELECT a.*, b.*,c.* FROM patient a
	JOIN appointment b
		On a.icPatient = b.patientIc
	JOIN doctorschedule c
		On b.scheduleId=c.scheduleId
	WHERE b.patientIc ='$session'");
	if (!$res) {
		die( "Error running $sql: " . mysqli_error());
	}
	$userRow=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DR FEELIZ KERAMAT</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="homie.php">HOME</a></li>
				<li><a href="patient.php">APPOINTMENT</a></li>
				<li class="active"><a href="trypatientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>">REMINDER</a></li>
				<li><a href="patientlogout.php?logout">LOG OUT</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Dr Feeliz Keramat</h2>
				<div class="page-links">
					<a href="patient.php">Home</a>
					<span>Reminder</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->

	<?php
		echo "<div class='container'>";
		echo "<div class='row'>";
		echo "<div class='page-header'>";
		echo "<h1>Your appointment list. </h1>";
		echo "</div>";
		echo "<div class='panel panel-primary'>";
		echo "<div class='panel-heading'>List of Appointment</div>";
		echo "<div class='panel-body'>";
		echo "<table class='table table-hover'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>ID No.</th>";
		echo "<th>Doctor Name</th>";
		echo "<th>Patient Ic </th>";
		echo "<th>Patient Full Name </th>";
		echo "<th>Schedule Day </th>";
		echo "<th>Schedule Date </th>";
		echo "<th>Start Time </th>";
		echo "</tr>";
		echo "</thead>";
		$res = mysqli_query($con, "SELECT a.*, b.*,c.*
				FROM patient a
				JOIN appointment b
				On a.icPatient = b.patientIc
				JOIN doctorschedule c
				On b.scheduleId=c.scheduleId
				WHERE b.patientIc ='$session'");


		if (!$res) {
		die("Error running $sql: " . mysqli_error());
		}


		while ($userRow = mysqli_fetch_array($res)) { 
		echo "<tbody>";
		echo "<tr>";
		echo "<td>" . $userRow['appId'] . "</td>";
		echo "<td>" . $userRow['doctorname'] . "</td>";
		echo "<td>" . $userRow['patientIc'] . "</td>";
		echo "<td>" . $userRow['patientFirstName'] . $userRow['patientLastName'] . "</td>";
		echo "<td>" . $userRow['scheduleDay'] . "</td>";
		echo "<td>" . $userRow['scheduleDate'] . "</td>";
		echo "<td>" . $userRow['startTime'] . "</td>";
		}

		echo "</tr>";
		echo "</tbody>";
		echo "</table>";

		?>
			</div>
</div>
</div>
</div>
<!-- display appoinment end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>

	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2023 All rights reserved.</a></h2>
	</footer>
	<!-- Footer section end -->

	

</body>
</html>
