<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

include 'dataconnection.php';
$sql="SELECT * FROM agents WHERE agentid = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['agentid'] . "</td>";
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['agentname'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>