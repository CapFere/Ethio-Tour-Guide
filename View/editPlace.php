<?php 
    include('../Controller/PlaceController.php');
    include_once('../Model/Place.php');
    $placeController = new PlaceController();
    $output = "";
    if(isset($_POST['updateInfo'])){
        $place = new Place($_GET['id'],$_POST['name'],$_POST['location'],
        $_POST['distance'],$_POST['category'],$_POST['description'],"");
		$output = $placeController->updatePlace($place);
    }
    if(isset($_GET['id'])){
        $p = $placeController->getPlace($_GET['id']);
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
	<title>Edit Place</title>

	<?php include('./templates/adminHeader.php')?>
	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Edit Place
					</h1>
					<p class="text-white link-nav"><a href="./place.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="./editPlace.php">
							Edit Place</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<form class="form-area " action="editPlace.php?id=<?php echo $p->getId();?>" method="POST" enctype="multipart/form-data" class="contact-form text-right">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" value="<?php echo $p->getName();?>" placeholder="Enter place name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter place name'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="location" value="<?php echo $p->getLocation();?>" placeholder="Enter location"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter location'" class="common-input mb-20 form-control"
								 required="" type="text">

								<input name="distance" value="<?php echo $p->getDistance();?>" placeholder="Enter distance" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter distance'"
								 class="common-input mb-20 form-control" required="" type="text">
								<input name="category" value="<?php echo $p->getCategory();?>" placeholder="Enter category" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter category'"
                                 class="common-input mb-20 form-control" required="" type="text">
			
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="description" placeholder="Description" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Description'" required=""><?php echo $p->getDescription();?></textarea>
							</div>
							<div class="col-lg-12 d-flex justify-content-between">
								<div class="alert-msg" style="text-align: left;"></div>
								<button name = "updateInfo" class="genric-btn primary circle text-uppercase" style="float: right;">Update</button>
                            </div>
                            <p style="color:green; text-size:15em;" class="ml-10 mt-5"><?php echo $output;?></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<?php include('./templates/footer.php')?>
</body>

</html>