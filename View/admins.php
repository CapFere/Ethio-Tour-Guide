<?php 
    include('../Controller/AccountController.php');
    $accountController = new AccountController();
    $output = $accountController->getAdminstrators();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $accountController->deleteAdminstrator($id);
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
	<title>Admins</title>

	<?php include('./templates/adminHeader.php')?>
	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Admins
					</h1>
					<p class="text-white link-nav"><a href="./place.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="./admins.php">
							Admins</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
                <?php foreach($output as $admins){ ?>
                    <div class="col-lg-12">
                        <div class="post-box mb-30">
                            <div class="d-flex">
                                <div class="post-meta">
                                    <div class="meta-head">
                                        <a><?php echo $admins->getName() ?></a>
                                    </div>
                                    <div class="meta-details">
                                        <ul>
                                            <li>
                                                <a>
                                                    <span class="lnr lnr-calendar-full"></span>
                                                    <?php echo $admins->getEmail() ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a >
                                                    <span class="lnr lnr-calendar-full"></span>
                                                    <?php echo $admins->getPassword() ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="lnr lnr-calendar-full"></span>
                                                    <?php echo $admins->getPhone() ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="lnr lnr-calendar-full"></span>
                                                    <?php echo $admins->getAddress() ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-btn">
                                    <a href="admins.php?id=<?php echo $admins->getId() ?>" class="primary-btn text-uppercase">Delete</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->
	<?php include('./templates/footer.php')?>
</body>

</html>