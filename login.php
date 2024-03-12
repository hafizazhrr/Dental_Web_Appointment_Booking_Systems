<?php
include_once 'assets/conn/dbconnect.php';
// include_once 'assets/conn/server.php';
?>
<!-- login -->
<!-- check session -->
<?php
session_start();
// session_destroy();
if (isset($_SESSION['patientSession']) != "") {
   header("Location: patient/patient.php");
}
if (isset($_POST['login']))
{
$icPatient = mysqli_real_escape_string($con,$_POST['icPatient']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM patient WHERE icPatient = '$icPatient'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

if ($row['password'] == $password)
{
$_SESSION['patientSession'] = $row['icPatient'];
?>

<script type="text/javascript">
alert('Login Success');
</script>

<?php
header("Location: patient/homie.php");
} else {
?>

<script>
alert('wrong input ');
</script>
<?php
}
}
?>
<!-- register -->
<?php
if (isset($_POST['signup'])) {
$patientFirstName = mysqli_real_escape_string($con,$_POST['patientFirstName']);
$patientLastName  = mysqli_real_escape_string($con,$_POST['patientLastName']);
$patientEmail     = mysqli_real_escape_string($con,$_POST['patientEmail']);
$icPatient     = mysqli_real_escape_string($con,$_POST['icPatient']);
$password         = mysqli_real_escape_string($con,$_POST['password']);
$month            = mysqli_real_escape_string($con,$_POST['month']);
$day              = mysqli_real_escape_string($con,$_POST['day']);
$year             = mysqli_real_escape_string($con,$_POST['year']);
$patientDOB       = $year . "-" . $month . "-" . $day;
$patientGender = mysqli_real_escape_string($con,$_POST['patientGender']);
//INSERT
$query = " INSERT INTO patient (  icPatient, password, patientFirstName, patientLastName,  patientDOB, patientGender,   patientEmail )
VALUES ( '$icPatient', '$password', '$patientFirstName', '$patientLastName', '$patientDOB', '$patientGender', '$patientEmail' ) ";
$result = mysqli_query($con, $query);
// echo $result;
if( $result )
{
?>
<script type="text/javascript">
alert('Register success. Please Login to make an appointment.');
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert('User already registered. Please try again');
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
                <form class="login100-form validate-form" role="form" method="POST" accept-charset="UTF-8" >
                    
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "991222144544">
                        <input class="input100" type="text" name="icPatient" >
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

</body>
</html>