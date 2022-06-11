<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a agent:</option>
<?php
$agentquery=$conn->query("select * from agents where branch='Ernakulam'");
$i=0;
if($agentquery->num_rows>0)
{
  While($aq=mysqli_fetch_assoc($agentquery))
  {
    $an=$aq['agentid'];
    $abranch=$aq['branch'];
    $aname=$aq['agentname'];
    ?>
    <option value="<?php echo $an ?>"><?php echo $aname ?> </option>
  <?php
  }
}?>


</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>


if($agentquery->num_rows>0)
{
  echo' <div class="form-outline mb-4">
  <select class="form-control" name="agent" id="agent" onChange="update()">';
  echo '<option value="" >Selet the agent</option>';
  While($aq=mysqli_fetch_assoc($agentquery))
  {
    $an=$aq['agentid'];
    $abranch=$aq['branch'];
    $aname=$aq['agentname'];
    
    echo '<option value="'.$aname.'">'.$aname.'</option>';
  
  }




  <?php 
 
if(isset($_POST['submit'])){
  echo 'alert("hello world")';
      $name=$_POST['agent'];
    $sql="update regform set agentname='$name'where reg_id='$num'";
   

    if($conn->query($sql))
    {
     echo'<script>window.alert("Updated successfully!!");
     window.location.href="agents.php";</script>';
    }

}?>