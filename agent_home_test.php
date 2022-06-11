<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lakshya</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Favicon -->
        <link href="img/logo1.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="libs/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

      </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="brand">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+91 09061277777"><i class="fa fa-phone-alt"></i>+91 09061277777</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@lakshyaca.com"><i class="fa fa-envelope"></i>info@lakshyaca.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                      <a href="https://www.google.com/maps/place/Adv+Easwara+Iyer+Rd,+Pullepady,+Ernakulam,+Kerala+682035/@9.9805503,76.2839523,17z/data=!3m1!4b1!4m5!3m4!1s0x3b080d4ef3d34c8f:0xbdc51073c7563cb1!8m2!3d9.9805503!4d76.286141"><i class="fa fa-map-marker"></i>Adv Easwara Iyer Rd, Pullepady, Kochi, Kerala</a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <!--<a href="#" class="navbar-brand">MENU</a>-->
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.html" class="nav-item nav-link active">Home</a>
                                        <a href="about.html" class="nav-item nav-link">About Us</a>
                                        <a href="agents.php" class="nav-item nav-link">Agents</a>
                                        <a href="registration.php" class="nav-item nav-link">Registration</a>
                                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                                        <!--<a href="" download="proposed_file_name">Download</a>
                                        <a href="https://htmlcodex.com/bootstrap-agency-template" class="btn"><i class="fa fa-download"></i>Download Now</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
<?php
include 'dataconnection.php'; 
$sql=$conn->query("select * from regform where branch='Ernakulam' and visitedornot='0'");
if($sql->num_rows >0)
{

echo"<table border='2'>";
echo"<caption>Queue List</caption>";
echo"<tr><th>Token no</th>";
echo"<th>Name</th>";
echo"<th>Interested course</th>";
echo "<th></th>";
echo "<th></th>";
echo"</tr>";
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';


echo '<td>'.$row['first_name'].'</td>';
echo '<tr> <td>'. $row['token'].'</td>';
echo '<td>'.$row['interested_course'].'</td>';
}
}
?>




            

            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-about">
                                <p>About Us</p>
                                <p>
                                    We have earned a great reputation as a key confidante and as a powerful institution as well as a close advisor to the aspiring candidates in CA, ACCA, CMA USA, CMA India and CS. We provide a platform by availing all the courses in the syllabi thereby making it a single point destination to all aspirants.
                                </p>
                                <br>
                                
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <img src="img/footerlogo.png">
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <a href="tel:+91 09061277777"><i class="fa fa-phone-alt"></i>+91 09061277777</a>
                                        <a href="mailto:info@lakshyaca.com"><i class="fa fa-envelope"></i>info@lakshyaca.com</a>
                                        <a href="https://www.google.com/maps/place/Adv+Easwara+Iyer+Rd,+Pullepady,+Ernakulam,+Kerala+682035/@9.9805503,76.2839523,17z/data=!3m1!4b1!4m5!3m4!1s0x3b080d4ef3d34c8f:0xbdc51073c7563cb1!8m2!3d9.9805503!4d76.286141"><i class="fa fa-map-marker"></i>Adv Easwara Iyer Rd, Pullepady, Kochi, Kerala</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com">2021 Lakshya | All right reserved.
                                </a></p>
                        </div>
                        <div class="col-md-6">
                            <p>Privacy Policy and Terms of Service Refund and Cancellation<a href="https://htmlcodex.com">, All Right Reserved</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
</body>
</html>