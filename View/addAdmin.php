<?php 
    include('../Controller/AccountController.php');
    include('../Model/Adminstrator.php');
    $accountController = new AccountController();
    $output = "";
    if(isset($_POST['saveInfo'])){
        $adminstrator = new Adminstrator(0,$_POST['name'],$_POST['email'],
        $_POST['password'],$_POST['phone'],$_POST['address']);
        $output = $accountController->addAdminstrator($adminstrator);
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
	<title>Add Admin</title>

	<?php include('./templates/adminHeader.php')?>

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Add New Admin
					</h1>
					<p class="text-white link-nav"><a href="./place.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="./addAdmin.php">
							Add Admin</a></p>
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
					<form class="form-area " action="addAdmin.php" method="POST" class="contact-form text-right">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="Enter name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter name'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Enter email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" class="common-input mb-20 form-control"
								 required="" type="email">

								<input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
                                 class="common-input mb-20 form-control" required="" type="password">
							</div>
							<div class="col-lg-6 form-group">
                                <input name="phone" placeholder="Enter phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'"
                                class="common-input mb-20 form-control" required="" type="number">
                                <input name="address" placeholder="Enter address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'"
                                class="common-input mb-20 form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex justify-content-between">
								<div class="alert-msg" style="text-align: left;"></div>
								<button name="saveInfo" class="genric-btn primary circle text-uppercase" style="float: right;">Save</button>
                            </div>
                            <p style="color:green; text-size:15em;" class="ml-10 mt-5"><?php echo $output;?></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
<?php include('./templates/footer.php')?>
</html>