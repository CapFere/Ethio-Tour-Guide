<?php 
    include('./Controller/PlaceController.php');
	$placeController = new PlaceController();
	if(isset($_GET['search'])){
		$output = $placeController->search($_GET['search']);
	}else{
		$output = $placeController->getPlaces();
	}
	
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Home</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="./plugins/css/linearicons.css">
	<link rel="stylesheet" href="./plugins/css/font-awesome.min.css">
	<link rel="stylesheet" href="./plugins/css/bootstrap.css">
	<link rel="stylesheet" href="./plugins/css/magnific-popup.css">
	<link rel="stylesheet" href="./plugins/css/nice-select.css">
	<link rel="stylesheet" href="./plugins/css/animate.min.css">
	<link rel="stylesheet" href="./plugins/css/owl.carousel.css">
	<link rel="stylesheet" href="./plugins/css/main.css">
</head>

<body>
	<!-- Start header Area -->
	<header id="header">
		<div class="container box_1170 main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo"></div>
				<nav id="nav-menu-container">
				<ul class="nav-menu">
                            <li class="menu-active"><a href="index.php">Home</a></li>
                            <li><a href="./View/addFeedback.php">Feedback</a></li>
                            <li>
                                <li><a href="./View/login.php">Login</a></li>
                            </li>
                    </ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End header Area -->

	<!-- Start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container box_1170">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Ethiopian Tour Guide
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start main body Area -->
	<div class="main-body section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-12 post-list">
					<div class="single-widget search-widget">
						<form class="example" action="index.php" method="GET" style="margin:auto;max-width:300px">
							<input type="text" placeholder="Search Places" name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
				<div class="col-lg-12 post-list">
					<!-- Start Post Area -->
					<section class="post-area">
						<div class="row">
                            <?php foreach($output as $place){ ?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-post-item short">
										<figure>
											<img class="post-img img-fluid" src="./plugins/img/<?php echo $place->getUrl()  ?>" alt="">
										</figure>
										<h3>
											<a><?php echo $place->getName() ?></a>
										</h3>
										<p><?php echo $place->getDescription() ?></p>
										<a href="./View/detailPlace.php?id=<?php echo $place->getId() ?>" class="primary-btn text-uppercase mt-15">continue Reading</a>				
									</div>				
                                </div>
                            <?php } ?>
						</div>
					</section>
					<!-- Start Post Area -->
				</div>
			</div>
		</div>
	<!-- Start main body Area -->

	<script src="./plugins/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="./plugins/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="./plugins/js/easing.min.js"></script>
	<script src="./plugins/js/hoverIntent.js"></script>
	<script src="./plugins/js/superfish.min.js"></script>
	<script src="./plugins/js/jquery.ajaxchimp.min.js"></script>
	<script src="./plugins/js/jquery.magnific-popup.min.js"></script>
	<script src="./plugins/js/owl.carousel.min.js"></script>
	<script src="./plugins/js/jquery.nice-select.min.js"></script>
	<script src="./plugins/js/waypoints.min.js"></script>
	<script src="./plugins/js/mail-script.js"></script>
	<script src="./plugins/js/main.js"></script>
</body>

</html>