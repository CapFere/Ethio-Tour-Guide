<?php 
    include('../Controller/FeedbackController.php');
    $feedbackController = new FeedbackController();
    $output = $feedbackController->getFeedback();
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
	<title>Feedback</title>

	<?php include('./templates/adminHeader.php')?>	
	
	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Feedbacks
					</h1>
					<p class="text-white link-nav"><a href="./place.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="./feedback.php">
							Feedback</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
                <?php foreach($output as $feedback){ ?>
                    <div class="col-lg-12">
                        <div class="post-box mb-30">
                            <div class="d-flex">
                                <div class="post-meta">
                                    <div class="meta-head">
                                        <a><?php echo $feedback->getName() ?></a>
                                    </div>
                                    <div class="meta-details">
                                        <ul>
                                            <li>
                                                <a>
                                                    <span class="lnr lnr-calendar-full"></span>
                                                    <?php echo $feedback->getEmail() ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a >
                                                    <span class="lnr lnr-calendar-full"></span>
                                                    <?php echo $feedback->getSubject() ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p><?php echo $feedback->getMessage() ?></p>
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