<?php

//create a connection to the mysql with my login credentials (CHANGE THIS)
$con=mysqli_connect("mysql5.cems.uwe.ac.uk","fet13018576","adamCYP93","fet13018576");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// create an SQL query to select all data from the artists table where the artist_id belongs to Outkast's ID (so you can check which artist has been hovered using javasciprt)

//assign the results array to a variable
$result = mysqli_query($con,"SELECT * FROM artists
WHERE artist_id='6'");


while($row = mysqli_fetch_array($result)) //access the results and iterate through them
  {
  echo "<img src='images/artists/". $row['image'] . ".png' alt='Outkast' />"; //this code will echo the standard img tags, but will grab a unique ID from the 'image' row of the artist at hand, then concatinate a .png extension and closing img tag in order to display correctly
  echo "<span class='popup'>";
  echo "<h3>Title: </h3>" . $row['name'];
  echo "<h3>Genre: </h3>" . $row['genre'];
  echo "<h3>Labels: </h3>" . $row['labels'];
  echo "</span>";
  
  }

mysqli_close($con); //close con
?>