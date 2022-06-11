<?php
include 'dataconnection.php';
$country_id = $_POST["country_id"];
echo $country_id;
?>




<?php
include 'dataconnection.php'; 
$agentquery=$conn->query("select * from agents where branch='Ernakulam'");
if($agentquery->num_rows>0)
{

  echo' <td><div class="form-outline mb-4">
  <select class="form-control" name="agent" id="agent">';
  echo '<option value="" >Selet the agent</option>';
  While($aq=mysqli_fetch_assoc($agentquery))
  {
    $an=$aq['agentid'];
    $abranch=$aq['branch'];
    $aname=$aq['agentname'];?>
    
    <option value="<?php echo $an ?>"><?php echo $aname ?> </option><?php
  
  }
}
echo '</td></tr>'?>