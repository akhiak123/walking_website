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

        <style>
* {box-sizing: border-box;}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<script>
    function validateForm() {
  let name = document.forms["regform"]["name"].value;
  let lname = document.forms["regform"]["lname"].value;
  let phno = document.forms["regform"]["phno"].value;

  if((name == "")&&(lname == "") &&(phno == ""))
  {
      alert("Please fill the details");
      return false;
  }
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (lname == "") {
    alert("Name must be filled out");
    return false;
  }
  if (phno == "") {
    alert("Number must be filled out");
    return false;
  }

  if (phno.length!=10) {
      console.log(phno.length)
    alert("Invalid Phone number");
    return false;
  }
  if(isNaN(phno)){
	document.write(" Phone number only contains number <br/>");
 }

}
    </script>
    </head>
    <?php
include 'dataconnection.php';?>
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
                                        <a href="index.html" class="nav-item nav-link ">Home</a>
                                      
                                        <a href="agents.php" class="nav-item nav-link ">Agents</a>
                                        <a href="registration.php" class="nav-item nav-link active">Registration</a>
                                        
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
          
            <section class="h-100 h-custom" style="background-image:url(img/bg5.jpg); background-repeat:no-repeat;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <!--<img src="img/reg3.png"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">-->
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Form</h3>

            <form class="px-md-2" name="regform" id="regform" method="POST"  onsubmit="return validateForm()" >

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control"  name="name"/>
                <label class="form-label" for="form3Example1q">First Name</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control"  name="lname"/>
                <label class="form-label" for="form3Example1q">Last Name</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="phno" />
                <label class="form-label" for="form3Example1q">Phone Number</label>
              </div>
              <div class="form-outline mb-4">
                  <select class="form-control" name="int_course">
                  <option value="CA">CA</option>
                    <option value="ACCA">ACCA</option>
                    <option value="CMA(USA)">CMA(USA)</option>
                    <option value="CAT">CAT</option>
                    <option value="CMA(INDIA)">CMA(INDIA)</option>
                    <option value="CS">CS</option>
                    <option value="B.VOC+ACCA">B.VOC+ACCA</option>
                    <option value="CA INTERMEDIATE">CA INTERMEDIATE</option>
                    <option value="BCOM + CIMA">BCOM + CIMA</option>
                    <option value="MBA + CIMA">MBA + CIMA</option>
                    <option value="MBA+ACCA">MBA+ACCA</option>
                    <option value="BBA+ACCA">BBA+ACCA</option>
                    <option value="B.COM+ACCA">B.COM+ACCA</option>
                    <option value="M.COM+ACCA">M.COM+ACCA</option>
                  </select>
                  <label class="form-label" for="form3Example1q">Interested course</label>
               
              </div>
              <div class="form-outline mb-4">
                  <select class="form-control" name="branch">
                  <option value="Ernakulam">Ernakulam</option>
                    <option value="Kozhikode">Kozhikode</option>
                    <option value="Trivandrum">Trivandrum</option>
                    <option value="Trissur">Trissur</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kottayam">Kottayam</option>
                  </select>
                  <label class="form-label" for="form3Example1q">Select Branch</label>
               
              </div>
              <button type="submit" class="btn btn-primary" name="submit" style="background-color:005697;">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            <!-- About Start -->
            <div class="about">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div id="video-section">
                                <div class="youtube-player" data-id="jssO8-5qmag"></div>
                                
                                <script>
                                    document.addEventListener("DOMContentLoaded",
                                        function() {
                                            var div, n,
                                                v = document.getElementsByClassName("youtube-player");
                                            for (n = 0; n < v.length; n++) {
                                                div = document.createElement("div");
                                                div.setAttribute("data-id", v[n].dataset.id);
                                                div.innerHTML = labnolThumb(v[n].dataset.id);
                                                div.onclick = labnolIframe;
                                                v[n].appendChild(div);
                                            }
                                        });

                                    function labnolThumb(id) {
                                        var thumb = '<img src="img/poster.jpg">',
                                            play = '<div class="play"></div>';
                                        return thumb.replace("ID", id) + play;
                                    }

                                    function labnolIframe() {
                                        var iframe = document.createElement("iframe");
                                        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
                                        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                                        iframe.setAttribute("frameborder", "0");
                                        iframe.setAttribute("allowfullscreen", "1");
                                        this.parentNode.replaceChild(iframe, this);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Learn About Us</h2>
                            <p>
                                Lakshya takes pride in the fact that we are not just educators but are career advisors to our students and are actively involved in our student’s strategic decision making processes. We are committed to providing every possible advantage to our students so that they are able to meet their ambitions. We understand the importance and value of time and money; which is precisely why we make sure that we have the best tutors in the industry and provide access to our unique modules system. Along with this aspirants have a proper method of tracking their progress.
                            </p>
                            <p>
                                
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container-fluid">
                    <div class="section-header">
                        <h2>Our Courses</h2>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>-->
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>CA</h3>
                                <img src="img/ca.jpg" alt="Service">
                                <p>Chartered Accountancy (CA) course offered by Lakshya is the flagship course of the institution and has always produced rank holders…</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>ACCA</h3>
                                <img src="img/acca.png" alt="Service">
                                <p>Lakshya is a well-known training institute providing ACCA courses in Kerala. We consistently strive to maintain being the best...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>CMA (INDIA)</h3>
                                <img src="img/cma.png" alt="Service">
                                <p>The Cost and Management Accountants (CMA India) course offered by Lakshya aims at building  competence in students. .... </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>CMA(USA)</h3>
                                <img src="img/cmausa.jpg" alt="Service">
                                <p>The CMA USA coaching programme offered by Lakshya provides an opportunity for students to be certified professionals...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>CAT</h3>
                                <img src="img/cat.jpg" alt="Service">
                                <p>Manmohan Singh introduced the CAT (Certificate in Accounting Technicians) course as part of the skill development ....</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>CS</h3>
                                <img src="img/cs.jpg" alt="Service">
                                <p>The Company secretary coaching classes provided by Lakshya aims at aiding students in taking their first step towards....</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>DEGREE COURSES</h3>
                                <img src="img/deg.jpg" alt="Service">
                                <p>The degree courses providing in lakshya are ACCA (B.VOC),BCOM + CIMA and BBA + ACCA.So student will get a degree...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>PG COURSES</h3>
                                <img src="img/pg.jpg" alt="Service">
                                <p>The PG courses providing in lakshya are MBA + CIMA,MBA + ACCA,and M.COM + ACCA .So student will get a post graduation ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


           
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Review</h2>
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            

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
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>


<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $phno=$_POST['phno'];
    $course=$_POST['int_course'];
    $branch=$_POST['branch'];
   
    //$query="select count(token) from regform where "
    $day=date("Y-m-d");
    echo $day;
    $count="select count(*)  as 'c' from regform where present_date='$day' and branch='$branch'";
    $result=$conn->query($count);
    if($result)
 {
    while($row=mysqli_fetch_assoc($result))
  {
        $s=$row['c'];
  }     
 }

   echo $s;
    if(intval($s)==0)
    {
        $p=1;

    }
    else 
    {
        $p=intval($s)+1;
    }
    

$query="insert into regform(first_name,last_name,phoneno,interested_course,branch,token,present_date)values('$name','$lname','$phno','$course','$branch','$p','$day')";

    if($conn->query($query))
    {
     echo'<script>window.alert("Registration completed successfully!!Your Token number is'.$p.'");
     window.location.href="index.html";</script>';
    }
}
?>