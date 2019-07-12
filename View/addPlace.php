<?php 
    include('../Controller/PlaceController.php');
    include('../Model/Place.php');
    $placeController = new PlaceController();
    $output = "";
    if(isset($_POST['saveInfo'])){
		$target="../plugins/img/".basename($_FILES['imgUrl']['name']);
        $place = new Place(0,$_POST['name'],$_POST['location'],
        $_POST['distance'],$_POST['category'],$_POST['description'],$_FILES['imgUrl']['name']);
		$output = $placeController->addPlace($place);
		move_uploaded_file($_FILES['imgUrl']['tmp_name'], $target);
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
	<title>Add Place</title>

	<?php include('./templates/adminHeader.php')?>
	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Add New Place
					</h1>
					<p class="text-white link-nav"><a href="./place.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="./addPlace.php">
							Add Place</a></p>
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
					<form class="form-area " action="addPlace.php" method="POST" enctype="multipart/form-data" class="contact-form text-right">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="Enter place name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter place name'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="location" placeholder="Enter location"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter location'" class="common-input mb-20 form-control"
								 required="" type="text">

								<input name="distance" placeholder="Enter distance" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter distance'"
								 class="common-input mb-20 form-control" required="" type="text">
								<input name="category" placeholder="Enter category" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter category'"
                                 class="common-input mb-20 form-control" required="" type="text">
								 <input name="imgUrl" placeholder="Enter category" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter category'"
                                 class="common-input mb-20 form-control" required="" type="file">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="description" placeholder="Description" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Description'" required=""></textarea>
							</div>
							<div class="col-lg-12 d-flex justify-content-between">
								<div class="alert-msg" style="text-align: left;"></div>
								<button name = "saveInfo" class="genric-btn primary circle text-uppercase" style="float: right;">Save</button>
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