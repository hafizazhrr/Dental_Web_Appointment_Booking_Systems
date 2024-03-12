<?php
include_once 'assets/conn/dbconnect.php';

session_start();
if (isset($_SESSION['doctorSession']) != "") {
header("Location: doctor/doctordashboard.php");
}
if (isset($_POST['login']))
{
$doctorId = mysqli_real_escape_string($con,$_POST['doctorId']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM doctor WHERE doctorId = '$doctorId'");

$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
// echo $row['password'];
if ($row['password'] == $password)
{
$_SESSION['doctorSession'] = $row['doctorId'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: doctor/doctordashboard.php");
} else {
	
?>
<script type="text/javascript">
    alert("Wrong input");
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" role="form"  method="POST" accept-charset="UTF-8" >
					
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<p><b><h2>HELLO, DOCTOR / ADMIN</h2></b></p>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "991222144544">
						<input class="input100" type="text" name="doctorId" >
						<span class="focus-input100" data-placeholder="IC Number"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="login" id="login" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
        <!-- modal container end -->
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main1.js"></script>
     <script src="assets/js/jquery.js"></script>

</body>
</html>