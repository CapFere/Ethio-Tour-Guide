<?php 
    include('../Controller/PlaceController.php');
    $placeController = new PlaceController();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $placeController->deletePlace($id);
	}
	if(isset($_GET['search'])){
		$output = $placeController->searchAll($_GET['search']);
	}else{
		$output = $placeController->getAllPlaces();
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
    <style>
        .update:hover{
            background:green !important;
            border-color: green !important;
        }
        .delete:hover{
            background:red !important;
            border-color: red !important;
        }
    </style>
    <?php include('./templates/adminHeader.php')?>	
    
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
					<!-- Start Post Area -->
					<section class="post-area">
						<div class="row">
						<div class="col-lg-12 post-list">
							<div class="single-widget search-widget">
								<form class="example" action="place.php" method="GET" style="margin:auto;max-width:300px">
									<input type="text" placeholder="Search Places" name="search">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
                            <?php foreach($output as $place){ ?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-post-item short">
										<figure>
											<img class="post-img img-fluid" src="../plugins/img/<?php echo $place->getUrl()  ?>" alt="">
										</figure>
										<h3>
											<a><?php echo $place->getName() ?></a>
										</h3>
										<p><?php echo $place->getDescription() ?></p>
                                        <a href="editPlace.php?id=<?php echo $place->getId() ?>" class="update primary-btn text-uppercase mt-15">Edit</a>	
                                        <a href="place.php?id=<?php echo $place->getId() ?>" class="delete primary-btn text-uppercase mt-15">Delete</a>				
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
    <?php include('./templates/footer.php')?>
</body>

</html>