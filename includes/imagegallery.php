<?php
$con=mysqli_connect("mysql5.cems.uwe.ac.uk","fet13018576","adamCYP93","fet13018576");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT id FROM images");



mysqli_close($con);
?>