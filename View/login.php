<?php 
    include('../Controller/AccountController.php');
    $accountController = new AccountController();
    $output = "";
    if(isset($_POST['login'])){
        $output = $accountController->login($_POST['email'],$_POST['password']);
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
	<title>Login</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href=".././plugins/css/linearicons.css">
	<link rel="stylesheet" href=".././plugins/css/font-awesome.min.css">
	<link rel="stylesheet" href=".././plugins/css/bootstrap.css">
	<link rel="stylesheet" href=".././plugins/css/magnific-popup.css">
	<link rel="stylesheet" href=".././plugins/css/nice-select.css">
	<link rel="stylesheet" href=".././plugins/css/animate.min.css">
	<link rel="stylesheet" href=".././plugins/css/owl.carousel.css">
	<link rel="stylesheet" href=".././plugins/css/main.css">
</head>

<body>
        <header id="header">
                <div class="container box_1170 main-menu">
                    <div class="row align-items-center justify-content-between d-flex">
                        <div id="logo"></div>
                        <nav id="nav-menu-container">
                            <ul class="nav-menu">
                                <li class="menu-active"><a href="../index.php">Home</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            
	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12" style="height: 600px !important;">
                    <h3 class="text-white mb-20 ml-30">
						Signin
					</h3>
                    <form class="form-area " method="POST" class="contact-form text-right">
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-3 form-group">
                                <input name="email" placeholder="Enter email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" class="common-input mb-20 form-control"
                                    required="" type="email">
                                <input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
									class="common-input mb-20 form-control" required="" type="password">
								<p style="color:red;"><?php echo $output;?></p>

                            </div>
                            <div class="col-lg-8 d-flex justify-content-between">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button name="login" class="genric-btn primary circle text-uppercase" style="float: right;">Login</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <?php include('./templates/footer.php')?>
</body>

</html>