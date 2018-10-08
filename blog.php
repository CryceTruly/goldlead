<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Cryce Truly">
		<!-- Meta Description -->
		<meta name="description" content="The Leading distributor of Minerals in Africa">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Gold Lead Limited|About Us</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">			

			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="wwww.facebook.com/goldleadlimited"><i class="fa fa-facebook"></i></a></li>
									<li><a href="www.twitter.com/goldleadlimited"><i class="fa fa-twitter"></i></a></li>
									<li><a href="www.medium.com/goldleadlimited"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="www.medium.com/goldleadlimited"><i class="fa fa-instagram"></i></a></li>
								
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+256797287407">+256797297407</a>
				  				<a href="mailto:support@goldlead.com">support@goldlead.com</a>				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo" class="navbar-brand">
				        <a href="index.php" style="color:black;">GOLD LEAD </a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="services.php">Service</a></li>
				              <li class="active link-active"><a href="blog.php">Blog</a></li>						          
				          <li><a href="contact.php">Contact</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
				</header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Home				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>
							  <a href="blog.php"> Blog Home</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">

					<div class="row">
																					
					<div class="col-lg-8 post-list blog-post-list">
					<?php

require_once("auth/db.php");
$sql = 'SELECT * FROM posts ORDER BY id DESC LIMIT 30';
$stmt=$pdo->query($sql);
if($stmt->rowCount()<1){?>

<center>
<h4 class="text-info">No posts yet</h4></center>

<?php 
}else{
while($r=$stmt->fetch(PDO::FETCH_OBJ)){?>

							<div class="single-post">
								<img class="img-fluid" src="img/<?php  echo $r->featured_image; ?>" alt="">
								<ul class="tags">
									<li><a >Minerals, </a></li>
									<li><a >Exploration, </a></li>
									<li><a >Discovery</a></li>
								</ul>
								<a href="blog-single.html">
									<h1>
										<?php echo $r->title;?>
									</h1>
								</a>
									<p>
									<?php echo $r->body;?>	</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
								
								</div>
							</div>
							</div>	
							<?php

}
}
?>					
							</div>


						<div class="col-lg-4 sidebar">
						<div class="single-widget category-widget">
								<h4 class="title">Post Categories</h4>
								<?php 
								
								$sql = 'SELECT * FROM categories';
                               $stmt=$pdo->query($sql);
								
								?>
								<ul>
								<?php
while($rr=$stmt->fetch(PDO::FETCH_OBJ)){
	?>
	<li><a href="#" class="justify-content-between align-items-center d-flex"><h6><?php echo $rr->name?></h6> <span>

	
	
	
	</span></a></li>
						
	<?php
}

?>
											</ul>
							</div>

							<div class="single-widget recent-posts-widget">
								<h4 class="title">Recent Posts</h4>
								<div class="blog-list ">
<?php
$sql = 'SELECT * FROM posts ORDER BY id DESC LIMIT 30';
$stmt=$pdo->query($sql);
if($stmt->rowCount()<1){?>

<center>
<h4 class="text-info">No posts yet</h4></center>

<?php 
}else{
while($r=$stmt->fetch(PDO::FETCH_OBJ)){?>
									<div class="single-recent-post d-flex flex-row row">
									<div class="col-md-4">
									<div class="recent-thumb">
											<img class="img-fluid" src="img/<?php echo $r->featured_image;?>" alt="">
										</div>
										
										
										</div>

										<div class="col-md-8">
										<div class="recent-details">
											<a href="blog.php">
												<h4>
													<?php  echo $r->title; ?>
												</h4>
											</a>
											<p>
											<?php echo $r->created_at;?>
											</p>
										</div></div>
										
										
									</div>	

									<?php

}
}

?>
									
									</div>																																					
								</div>								
							

										

							<div class="single-widget tags-widget">
								<h4 class="title">Popular Tags</h4>
								 <ul>
								 	<li><a>Processing</a></li>
								 	<li><a >Mining</a></li>
								 	<li><a>Processing</a></li>
								 	<li><a>Quality assesment</a></li>
								 	<li><a>Techlology</a></li>
									 <li><a>Discovery</a></li>
									 <li><a>Exploration</a></li>
								 </ul>
							</div>				

						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
		
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
					<div class="col-md-4 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Get in touch via social media</p>
								<div class="footer-social d-flex align-items-center">
									<a href="wwww.facebook.com/goldleadlimited"><i class="fa fa-facebook"></i></a>
									<a href="www.twitter.com/goldleadlimited"><i class="fa fa-twitter"></i></a>
								<a href="www.medium.com/goldleadlimited"><i class="fa fa-medium"></i></a>
								
									
								
								</div>
							</div>
</div>
					
						<div class="col-md-4">
							<div class="single-footer-widget">
								<h6>Important Links	</h6>
							
								<li ><a href="http://energyandminerals.go.ug/downloads/Mining_Reg_Commence.pdf" target="_blank">The mining Act instrument 2004</a> </li>
								<li ><a href="http://energyandminerals.go.ug/downloads/minpol00.pdf" target="_blank">Energy and Mining Act of 2000</a> </li>
								<li ><a href="http://www.energyandminerals.go.ug/" target="_blank">
Ministry of energy and mineral development</a> </li>
							
							</div>
						</div>		
						
						<div class="col-md-4">
							<div class="single-footer-widget">
								<h6>Find Us</h6>
									<a><i class="fa fa-phone"></i> Tel:+256797297407</a><br>
									<a><i class="fa fa-phone"></i> Other:+256797297407</a><br>
									<a><i class="fa fa-envelope"></i> Email:support@teamlead.com</a><br>
									<a><i class="fa fa-location"></i>Address:
									Lubowa Estates Nazziba Hill plot No 495<br>
									Kampala Uganda</a>
									
									<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Gold Lead Limited All rights reserved
								
								</p>					
							</div>
						
						
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

		

			<!-- end footercopy area -->
		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



