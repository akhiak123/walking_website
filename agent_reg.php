<!DOCTYPE html>
<html>
<head>
<link href="css/agent_reg.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
<script>
  function matchPassword() {  
  var pw1 =  document.forms["agent_reg"]["psw"].value;  
  var pw2 =  document.forms["agent_reg"]["confirm_password"].value;    
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
    return false;
  } 
}  
  </script>
</head>
<body>
<?php
include 'dataconnection.php';
?>

<form  method="POST" name="agent_reg" onsubmit="return matchPassword()">
  <h2>Sign Up</h2>
		<p>
			<label for="Email" class="floatLabel">LAN ID</label>
			<input id="lanid" name="lanid" type="text">
		</p>

		<p>
			<input type="submit" value="Create My Account" id="submit" name="submit">
		</p>
	</form>


</body>
<?php
if(isset($_POST['submit'])){
 
    $lanid=$_POST['lanid'];  
   $query="insert into agent_reg(agent_lanid,password)values('$lanid','$password')";

    if($conn->query($query))
    {
      echo'<script>window.alert("Agent Registration completed successfully!!");
      window.location.href="index.html";</script>';
    }
}
?>
</html>
