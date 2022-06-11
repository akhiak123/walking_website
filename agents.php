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
        <link href="css/agent_home.css" rel="stylesheet">

      </head>
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
                                    <a href="tel:+91 09061277777"><i class="fa fa-phone-alt" ></i>+91 09061277777</a>
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
                                        <a href="index.html" class="nav-item nav-link ">Home</a>
                             
                                        <a href="agents.php" class="nav-item nav-link active">Agents</a>
                                        <a href="registration.php" class="nav-item nav-link">Registration</a>
                               
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

<body class="large-screen">
  <div class="wrap">
    <div class="btn-toolbar buttons">
      <div class="btn-group">
        <button id="desktop" class="btn btn-primary">
        <i class="fa fa-desktop" aria-hidden="true"></i>
        Queue list
      </button>
      </div>
      <div class="btn-group">
        <button id="mobile" class="btn btn-default">
        <i class="fa fa-mobile-phone" aria-hidden="true"></i>
        Visited list
      </button>
      </div>
    </div>
    <div class="table-wrapper">
      <table class="table-responsive card-list-table">
        <thead>
          <tr>
            <th>Token</th>
            <th>Name </th>
            <th>Interested course</th>
            <th>Phone number</th>
            <th>Select Owner</th>
            <th>Submit</th>
          </tr>
        </thead>
        <tbody>
          <tr>

          <?php
include 'dataconnection.php'; 
$day=date("Y-m-d");
$sql=$conn->query("select * from regform where branch='Ernakulam' and visitedornot='0' and present_date='$day'");

echo '<form method="GET">';
if($sql->num_rows >0)
{

While($row=mysqli_fetch_assoc($sql))
{

    $id=$row['id'];
    $name=$row['first_name'];
    $last_name=$row['last_name'];
    $phoneno=$row['phoneno'];
    $interested_course=$row['interested_course'];
    $branch=$row['branch'];
    $token=$row['token'];
    $present_date=$row['present_date'];
    $visitedornot=$row['visitedornot'];
echo '<tr><td>'.$token.'</td>';
echo '<td >'.$name.'</td>';
echo '<td >'.$interested_course.'</td>';
echo '<td >'.$phoneno.'</td><td>';

  echo '<td><a href="agent_home2.php?id='.$id.'" class="btn btn-primary" style="background-color:005697;">Submit</td></tr>';

echo'</form>';
}
}
?>

          
         
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>