<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courses World</title>

    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	<script src="//use.edgefonts.net/bebas-neue.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87290449-2', 'auto');
  ga('send', 'pageview');
	</script>

</head>

<body>
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="courses.php">All Course</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a class="btn btn-sm animation animated-item-3" href="sign.php">Sign Up</a>
					&nbsp &nbsp <a class="btn btn-md animation animated-item-3" href="log.php">Login</a>
					&nbsp &nbsp <a class="btn btn-lg animation animated-item-3" href="teach.php">Teacher</a>
                </ul>
            </div>
        </div>
    </header><!--/header-->


	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 align="center" class="animation animated-item-1"><br><br><br>Courses World<br><br></h2>
                                    <p class="animation animated-item-2">Take any Free OR Paid Course and Get Certificate at the End of the Course. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                   <h2 align="center" class="animation animated-item-1"><br><br><br><br><br></h2>
								   <p align="center" class="animation animated-item-2">Learning Will Bring the World in Your Hands</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>For Watching Only <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">FREE COURSES!</span> Click on the Watch Free Button => </h3> <a href="youtube.com/itpeshawar" class="btn btn-orange">Watch Free!</a>
							<!-- *********************************************************************

													Linking Youtube Channel       	


								 *********************************************************************
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->
<hr>

		<!-- Our Courses -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Courses</h1>
				</div>
		
		<ul class="grid cs-style-3">
			

   <!-- ******************************************** Start of PHP **************************************************-->
		
		
<?php
	include "php/connection.php";
	
	$query="select * from courses";
	$query_exec=mysqli_query($conn,$query);
	
	while ($row=mysqli_fetch_array($query_exec))
	{
			if ($row['number']<=6)
			{
	        	echo "<div class='col-md-4 col-sm-6'>
					<figure>
						<img src='img/courses/".$row['image']."' alt='".$row['image']."'>
						<figcaption>
							<h3>".$row['name']."</h3>
							<span>".$row['language']."</span>
							<a href='notlogin.php'>Watch Demo Videos</a>
						</figcaption>
					</figure>
	        	</div>";
			}
	}
			
?>

<!-- ******************************************** End of PHP **************************************************-->
		</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Team -->
			<br><br><br><br>
		<div class="section">
	    	<div class="container">
			<div class="section-title">
					<h1>Our Awesome Team</h1>
			</div><br>
				<div class="row">
					<!-- Team Member -->
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<!-- Team Member Photo -->
							<div class="team-member-image"><img src="img/team/1.jpg" alt="Imran Khan"></div>
							<div class="team-member-info">
								<ul>
									<!-- Team Member Info & Social Links -->
									<li class="team-member-name">
										Imran Khan
										<!-- Team Member Social Links -->
										<span class="team-member-social">
											<a href="youtube.com/itpeshawar"><i class="icon-youtube"></i></a>
											<a href="facebook.com/itpeshawar"><i class="icon-facebook"></i></a>
											<a href="twitter.com/itpeshawar"><i class="icon-twitter"></i></a>
											<a href="instagram.com/itpeshawar"><i class="icon-instagram"></i></a>
										</span>
									</li>
									<li>Web Developer</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Team Member -->
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="img/team/2.jpg" alt="Name Surname"></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Mudassir Khan
										<!-- Team Member Social Links -->
										<span class="team-member-social">
											<a href="youtube.com/itpeshawar"><i class="icon-youtube"></i></a>
											<a href="facebook.com/itpeshawar"><i class="icon-facebook"></i></a>
											<a href="twitter.com/itpeshawar"><i class="icon-twitter"></i></a>
											<a href="instagram.com/itpeshawar"><i class="icon-instagram"></i></a>
										</span>
									</li>
									<li>Web Designer</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="img/team/3.jpg" alt="Name Surname"></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Iftikhar Khan
										<!-- Team Member Social Links -->
										<span class="team-member-social">
											<a href="youtube.com/itpeshawar"><i class="icon-youtube"></i></a>
											<a href="facebook.com/itpeshawar"><i class="icon-facebook"></i></a>
											<a href="twitter.com/itpeshawar"><i class="icon-twitter"></i></a>
											<a href="instagram.com/itpeshawar"><i class="icon-instagram"></i></a>
										</span>
									</li>
									<li>Project Manager</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
<hr>
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
	        				<b>Phone:</b> +92 343 9858580<br/>
	        				<b>Whatsapp:</b> +92 343 9858580<br/>
	        				<b>Email:</b> <a href="mailto:imrankhanvloger.com">imrankhanvloger.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Social Media</h3>
						<p>You Can Check Our Social Media and Contact Us With any Platform You Want.</p>
		    			<div>
		    				<img src="img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
							<img src="img/icons/rss.png" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Motive</h3>
		    				<p>Our Motive is to Provide You Best Lectures For FREE OR With Very Less Cost.</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&reg; <a href="youtube.com/itpeshawar">IMRAN KHAN</a></div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>