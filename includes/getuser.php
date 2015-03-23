<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','peter','abc123','my_db');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM artists";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Genre</th>
<th>Labels</th>
<th>Website</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "<td>" . $row['labels'] . "</td>";
  echo "<td>" . $row['website'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>