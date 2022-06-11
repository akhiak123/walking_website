
<html>
  <head>
</head>
<body>
  <?php 
  include "dataconnection.php";
  ?>
<form action="#" method="post">
  <h2>Sign Up</h2>
		<p>
			<label for="Email" class="floatLabel">LAN-ID</label>
			<input id="Email" name="Email" type="text">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password">
			<!--<span>Enter a password longer than 8 characters</span>-->
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			<!--<span>Your passwords do not match</span>-->
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p>
	</form>
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