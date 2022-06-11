
<html>
  <head>
</head>
<body>
  <?php 
  include "dataconnection.php";
  ?>
  <section class="h-100 h-custom" style="background-image:url(img/bg1.jpg); background-repeat:no-repeat;">
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-lg-8 col-xl-6">
      <div class="card rounded-3">
        <!--<img src="img/reg3.png"
          class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
          alt="Sample photo">-->
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Sign in</h3>

          <form class="px-md-2" name="regform" id="regform" method="POST">

            <div class="form-outline mb-4">
              <input type="text" id="form3Example1q" class="form-control"  name="name"/>
              <label class="form-label" for="form3Example1q">User Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="form3Example1q" class="form-control" name="phno" />
              <label class="form-label" for="form3Example1q">Password</label>
            </div>
             
            </div>
            <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Submit</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</section>
</body>      
<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phno=$_POST['phno'];
    $course=$_POST['int_course'];
    
    
   $query="insert into regform(first_name,phoneno,interested_course)values('$name','$phno','$course')";

    if($conn->query($query))
    {
      echo'<script>window.alert("Registration completed successfully!!");
      window.location.href="index.html";</script>';
    }
}
?></html>