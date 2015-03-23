<?php
// Create connection
$con=mysqli_connect("mysql5.cems.uwe.ac.uk","fet13018576","adamCYP93","fet13018576");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//My SQL query to insert form data into database
$sql="INSERT INTO members (name, email, tel, message)
	VALUES
	('$_POST[name]','$_POST[email]','$_POST[tel]','$_POST[message]')";

	
	

mysqli_close($con);

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGFEST - Home</title>

    <!-- CSS Links -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap (minified) -->
    <link href="css/custom.css" rel="stylesheet"><!-- Mine -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body class="main">
  <div id="bgbar1"><!-- The background flag colours -->
  </div>
  <div id="bgbar2">
  </div>           <!--                             -->

    <div class="container"> <!-- Main Container -->

      <header class="row title"> <!-- Row to make use of Bootstrap's grid system -->
        <h1 id="test"><a href="index.html">THIS IS REG-FEST</a></h1>
        <h3>25th August 2014 @ Guaba Beach Bar</h3>
      </header>

        <nav class="row"> <!-- NAV BAR -->
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="lineup.html">Line Up</a></li>
            <li><a href="tickets.html">Tickets</a></li>
            <li><a href="info.html">Info</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
            
          </ul>
        </nav>
<!-- End Nav -->
			

			
			<div class="row title">
				<h2><?php if (!mysqli_query($con,$sql)){
         ?> Thank you for your message <?php  } else {  ?> Failed <?php } 	if (isset($_POST['newsletter'])){
		 ?> <small>We have placed your email address onto our mailing list!</small> <?php } ?></h2>
                            
                            <a href="tickets.html" type="button" class="btn btn-primary">Buy a ticket!</a>
							<a href="lineup.html" type="button" class="btn btn-primary">Check out the Lineup!</a> 

			</div>
	</div>

    <script src="js/jquery.js"></script>     <!-- jQuery -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/application.js"></script></body>
</html>
