<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<style>
.popup {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    display: none;
}
.popup-content {
    background-color: white;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888888;
    width: 30%;
    font-weight: bolder;
}
.popup-content button {
    display: block;
    margin: 0 auto;
}
.show {
    display: block;
}
h1 {
    color: green;
}
</style>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
            <div class="card-heading">
                    <h2 class="title">New Patient Registration</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">IC Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Birth Date</div>
                            <div class="value">
                                <div class="input-group">
                                        <div class="row">
                                            
                                            <div class="col-xs-4 col-md-4">
                                                <select name="month" class = "form-control input-lg" required>
                                                    <option value="">Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Mar</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">May</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="day" class = "form-control input-lg" required>
                                                    <option value="">Day</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="year" class = "form-control input-lg" required>
                                                    <option value="">Year</option>
                                                    
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-row p-t-20">
                            <label class="label label--block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" id="myButton" type="submit">Register</button>
                          
                            <div id="myPopup" class="popup">
                                <div class="popup-content">
                                    <h1 style="color:green;">Patient Succesfully Registered!</h1>
                                    <button id="closePopup">(X)</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       
            </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myButton = document.getElementById("myButton");
        var closePopup = document.getElementById("closePopup");
        var myPopup = document.getElementById("myPopup");

        myButton.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission
            myPopup.classList.add("show");
        });

        closePopup.addEventListener("click", function() {
            myPopup.classList.remove("show");
        });

        window.addEventListener("click", function(event) {
            if (event.target == myPopup) {
                myPopup.classList.remove("show");
            }
        });
    });
</script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
