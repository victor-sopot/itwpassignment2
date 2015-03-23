<?php
$con=mysqli_connect("mysql5.cems.uwe.ac.uk","fet13018576","adamCYP93","fet13018576");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM artists
WHERE artist_id='5'");

while($row = mysqli_fetch_array($result))
  {
  echo "<img src='images/artists/". $row['image'] . ".png' alt='Alborosie' />"; //this code will echo the standard img tags, but will grab a unique ID from the 'image' row of the artist at hand (from database), then concatinate a .png extension and closing img tag in order to display correctly
  echo "<span class='popup'>";
  echo "<h3>Title: </h3>" . $row['name'];
  echo "<h3>Genre: </h3>" . $row['genre'];
  echo "<h3>Labels: </h3>" . $row['labels'];
  echo "</span>";
  
  }

mysqli_close($con);
?>