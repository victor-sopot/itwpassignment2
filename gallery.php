<?php
                $con=mysqli_connect("mysql5.cems.uwe.ac.uk","fet13018576","adamCYP93","fet13018576");
                // Check connection
                if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }

                $result = mysqli_query($con,"SELECT id FROM images");
                
                ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGFEST - Gallery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    

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
    <div class="container">

      <header class="row title">
        <h1><a href="index.html">THIS IS REG-FEST</a></h1>
        <h3>25th August 2014 @ Guaba Beach Bar</h3>
      </header>

        <nav class="row">
          <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="lineup.html">Line Up</a></li>
            <li><a href="tickets.html">Tickets</a></li>
            <li><a href="info.html">Info</a></li>
            <li class="active"><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
            
          </ul>
        </nav>
        
       
        
        <div class="row">
            <h3>Check out our image gallery</h3>
                <?php
                    echo "<div class='popup-gallery'>";                    
                    while($row = mysqli_fetch_array($result))
                    {

                    echo "<a href='images/gallery/". $row['id'] . ".jpg'>"; //this code will print out markup for images in the table, and concatenate the .png extention The outputted markup will then in turn work with Lightbox functionality.
                    echo "<img src='images/gallery/". $row['id'] . ".jpg' alt='" .$row['image'] ."' width='250' /></a>";

                    } 
                    echo "</div>";                    
                    mysqli_close($con);

                ?>
        
        </div>
		<div class="row title">
		<p>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
			</a>
			<a href="http://www.cems.uwe.ac.uk/w3c-validator/check?uri=referer">
				<img src="http://www.w3.org/Icons/valid-html401-blue" alt="This HTML is valid!" />
			</a>
		</p>
	</div>
    </div>
<!-- end container -->

<!-- javascript -->
    <script src="js/jquery.js"></script>     <!-- jQuery -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/application.js"></script>
    <script src="js/gallery.js"></script>

</body>
</html>
