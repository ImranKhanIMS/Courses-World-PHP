<?php
		session_start();
		if (isset($_SESSION['email']))
		{	
	

?>
<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teacher Panel</title>

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

	
	<style>
		.imi
		{
			font-size:30px;
		}
		.imi1
		{
			color:red;
		}
	</style>
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
						<form action="php/logoutteacher.php" method="post">
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<input class="btn btn-sm animation animated-item-3" type="submit" value="Log Out">
						</form>
                </ul>
            </div>
        </div>
    </header><!--/header-->
	
	<!-- Page Title -->
	 <br>
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Add Course</h1>
					</div>
				</div>
			</div>
		</div>
						
		<div class="container text-center imi">
			<div class="row">
				<div class="col-md-6">
				  <br><br><br>	
	<form method="POST" action="add1.php" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Course Name"><br><br>
		<input type="text" name="language" placeholder="Course Language"><br><br>
		<input type="text" name="number" placeholder="Course Number"><br><br>
		<h1 class="imi1">Image</h1>
		<input type="file" name="file"><br>
		<h1 class="imi1">Demo Videos</h1>
		<input type="file" name="video1"><br><br>
		<input type="file" name="video2"><br><br>
		<input type="file" name="video3"><br><br>
		<input class="btn btn-lg animation animated-item-3" type="submit" name="submit" value="Add Course">
	</form>
				  <br><br><br>
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
	
	<?php
	
	include "php/connection.php";

	if (isset($_POST['submit']))
	{
		$nam=$_POST['name'];
		$lang=$_POST['language'];

		$img = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		
		$num=$_POST['number'];
		
		if ($nam!="" && $img!="" && $lang!="" && $num!="")
		{
			move_uploaded_file($tmp,"img/courses/".basename($img));
			$query = "INSERT INTO courses (name,language,image,number) VALUES('$nam','$lang','$img','$num')";
			$query_exec=mysqli_query($conn,$query);
			
			echo "done!";
		}
		
		
		$video1 = $_FILES['video1']['name'];
		$tmp1 = $_FILES['video1']['tmp_name'];
		
		if ($num!="" && $video1!="")
		{
		move_uploaded_file($tmp1,"videos/".$video1);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$video1')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$video2 = $_FILES['video2']['name'];
		$tmp2 = $_FILES['video2']['tmp_name'];
		
		if ($num!="" && $video2!="")
		{
		move_uploaded_file($tmp2,"videos/".$video2);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$video2')";
		$query_exec=mysqli_query($conn,$query);
		}

		$video3 = $_FILES['video3']['name'];
		$tmp3 = $_FILES['video3']['tmp_name'];
		
		if ($num!="" && $video3!="")
		{
		move_uploaded_file($tmp3,"videos/".$video3);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$video3')";
		$query_exec=mysqli_query($conn,$query);
		}
		
	}
}
	else
	{
		header("Location: teach.php");
	}
	?>