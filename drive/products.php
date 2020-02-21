<!DOCTYPE html>
<html>
	<head>
		<!--favicon-->
		<link rel="shortcut icon" href="favicon.ico" type="image/icon">
		<link rel="icon" href="favicon.ico" type="image/icon">
		<title>SREE AYYAPPA COLLEGE, ERAMALLIKKARA| Campus Drives</title>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<meta name="keywords" content="Tillage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
		</script>
		<!-- bootstarp-css -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--// bootstarp-css -->
		<!-- css -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!--// css -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600'
		rel='stylesheet' type='text/css'>
		<!--/fonts-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!-- pop-up -->
		<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
		<!-- pop-up -->
	</head>
	<body>
		<!-- banner -->
		<div class="banner a-banner">
			<!-- container -->
			<div class="container">
				<div class="header">
					<div class="head-logo">
						
					</div>
					<div class="top-nav">
						<span class="menu">
							<img src="images/menu.png" alt="">
						</span>
						<ul class="nav1">
							
							<li class="hvr-sweep-to-bottom">
								<a href="../home.php">SREE AYYAPPA COLLEGE, ERAMALLIKKARA<i>  Homepage</i></a>
						
								<li class="hvr-sweep-to-bottom active">

					
									<a href="products.php">Campus Drives<i>Campus Drives</i></a>
								</li>
								
							
								<div class="clearfix"></div>
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
						</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner -->
		<!-- products-top -->
		<div class="products-top">
			<!-- container -->
			<div class="container">
				<h3 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">On Going and Upcomming Drives</h3>
				<h5 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<span> </span>
				</h5>
				<div class="products-top-grids wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					
					<?php


$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT p.`id`, c.name, `job_title`, `job_desc`, `sslc_per`, `plus two_per`,
 `degree_cgpa`, `backlog`, `jobvenue`, `jobdate` FROM `placement` p JOIN company c 
 ON c.id=p.`company_id` WHERE `jobdate`>=now() ";
    $res=$connection->query($sql);

if($res->num_rows>0){

	$i=0;
    while($row=$res->fetch_assoc()){
$i++;
        $id=$row["id"];
        $Cname=$row["name"];
        $job_title=$row["job_title"];
        $job_desc=$row["job_desc"];
        $sslc_per=$row["sslc_per"];
        $plustwo_per=$row["plus two_per"];
        $degree_cgpa=$row["degree_cgpa"];

        $backlog=$row["backlog"];
        $jobvenue=$row["jobvenue"];
		$jobdate=$row["jobdate"];



		echo "<div class='col-md-4 products-grid'>
		<div class='products-number'>
			<p>$i.</p>
		</div>
		<div class='products-text'>
			<h4>$Cname</h4>
			<p><b>  $job_title  <b> </p>

			<p> $job_desc   </p>

			<p>  <b> Interview Location : </b>  $jobvenue   </p>

			<p>  <b> Interview Date : </b>$jobdate  </p>
			<div class='see-button'>

			 Qualification

			<table class='table table-striped'>

	<tr >
	<td>  SSLC  </td>    <td> $sslc_per  % </td>   </tr>
	<tr>
	<td>  Plus Two  </td>    <td> $plustwo_per % </td> 	</tr>
	<tr>
	<td>  DEGREE  </td>    <td> $degree_cgpa CGPA </td> 	</tr>

	<tr>
	<td>  No of Min Backlogs Allowed  </td>    <td> $backlog </td> 	</tr>
	</tr>

			</table>
			</div>
		</div>
		<div class='clearfix'></div>
	</div>";
		

		
	}}

?>
					
					
				
					</div>
				
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- //products-top -->
		<!-- products-bottom -->
		<div class="products-bottom">
			<!-- container -->
			<div class="container">
				<h3 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">Recent Drives Focus Box</h3>
				<div class="products-bottom-grids">
					<div class="gallery-grids">
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/intel.jpg" data-fancybox-group="gallery"><img src="images/intel.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/microsoft.jpg" data-fancybox-group="gallery"><img src="images/microsoft.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/designs.png" data-fancybox-group="gallery"><img src="images/designs.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/ms1.jpg" data-fancybox-group="gallery"><img src="images/ms1.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/bill.jpg" data-fancybox-group="gallery"><img src="images/bill.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="gallery-grids">
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery"><img src="images/6.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/std.jpg" data-fancybox-group="gallery"><img src="images/std.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/og.jpg" data-fancybox-group="gallery"><img src="images/og.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/infy.png" data-fancybox-group="gallery"><img src="images/infy.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/goo.png" data-fancybox-group="gallery"><img src="images/goo.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- products-bottom -->
		<!-- footer -->
	
	
	</body>

</html>