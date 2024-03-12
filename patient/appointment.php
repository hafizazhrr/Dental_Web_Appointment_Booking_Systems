<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session= $_SESSION['patientSession'];
// $appid=null;
// $appdate=null;
if (isset($_GET['scheduleDate']) && isset($_GET['appid'])) {
	$appdate =$_GET['scheduleDate'];
	$appid = $_GET['appid'];
}
// on b.icPatient = a.icPatient
$res = mysqli_query($con,"SELECT a.*, b.* FROM doctorschedule a INNER JOIN patient b
WHERE a.scheduleDate='$appdate' AND scheduleId=$appid AND b.icPatient=$session");
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);


	
//INSERT
if (isset($_POST['appointment'])) {
$patientIc = mysqli_real_escape_string($con,$userRow['icPatient']);
$scheduleid = mysqli_real_escape_string($con,$appid);
$symptom = mysqli_real_escape_string($con,$_POST['symptom']);
$comment = mysqli_real_escape_string($con,$_POST['comment']);
$avail = "notavail";


$query = "INSERT INTO appointment (  patientIc , scheduleId , appSymptom , appComment  )
VALUES ( '$patientIc', '$scheduleid', '$symptom', '$comment') ";

//update table appointment schedule
$sql = "UPDATE doctorschedule SET bookAvail = '$avail' WHERE scheduleId = $scheduleid" ;
$scheduleres=mysqli_query($con,$sql);
if ($scheduleres) {
	$btn= "disable";
} 


$result = mysqli_query($con,$query);
// echo $result;
if( $result )
{
?>
<script type="text/javascript">
alert('Appointment made successfully.');
</script>
<?php
header("Location: patientapplist.php");
}
else
{
	echo mysqli_error($con);
?>
<script type="text/javascript">
alert('Appointment booking fail. Please try again.');
</script>
<?php
header("Location: patient/patient.php");
}
//dapat dari generator end
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Make Appoinment</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<link href="assets/css/default/blocks.css" rcel="stylesheet">


		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

	</head>
	<body>
		<!-- navigation -->
		
		<!-- navigation -->
		<div class="container">
			<section style="padding-bottom: 50px; padding-top: 50px;">
				<div class="row">
					<!-- start -->
							<div class="description">					
								
								<div class="panel panel-default">
									<div class="panel-body">									
										
											<form class="form" role="form" method="POST" accept-charset="UTF-8">
											<div class="panel panel-default">
												<div class="panel-heading">Patient Information</div>
												<div class="panel-body">
													
													Patient Name: <?php echo $userRow['patientFirstName'] ?> <?php echo $userRow['patientLastName'] ?><br>
													Patient IC: <?php echo $userRow['icPatient'] ?><br>
													Contact Number: <?php echo $userRow['patientPhone'] ?><br>
													Address: <?php echo $userRow['patientAddress'] ?>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">Appointment Information</div>
												<div class="panel-body">
													Day: <?php echo $userRow['scheduleDay'] ?><br>
													Date: <?php echo $userRow['scheduleDate'] ?><br>
													Time: <?php echo $userRow['startTime'] ?><br>
												</div>
											</div>
											
											<div class="form-group">
												<label for="recipient-name" class="control-label">Symptom/Services:</label>
												<input type="text" class="form-control" name="symptom" required>
											</div>
											<div class="form-group">
												<label for="message-text" class="control-label">Comment:</label>
												<textarea class="form-control" name="comment" required></textarea>
											</div>
											<div class="form-group">
												<input type="submit" name="appointment" id="submit" class="btn btn-primary" value="Make Appointment">
											</div>
										</form>
									</div>
								</div>
								 
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<script src="assets/js/jquery.js"></script>
					<script src="assets/js/bootstrap.min.js"></script>
				</body>
			</html>