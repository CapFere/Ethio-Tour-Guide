<?php 
    include('../Controller/PlaceController.php');
    $placeController = new PlaceController();
    $output = $placeController->getPlace($_GET['id']);
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
    <title>Place Details</title>

    <?php include('./templates/header.php')?>

    <!-- start banner Area -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Place Details
                    </h1>
                    <p class="text-white link-nav"><a href="../index.php">Home </a> <span class="./detailPlace.php"></span>
                        <a href="blog-details.html">
                            Place Details</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Blog Area -->
    <section class="blog_area section-gap single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid" src="../plugins/img/<?php echo $output->getUrl() ?>" alt="">
                        <h4><?php echo $output->getName() ?></h4>
                        <div class="user_details">
                            <div class="float-left">
                                <a ><?php echo $output->getCategory() ?></a>
                                <a ><?php echo $output->getLocation() ?></a>
                                <a><?php echo $output->getDistance() ?></a>
                            </div>
                        </div>
                        <p><?php echo $output->getDescription() ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area -->
    <?php include('./templates/footer.php')?>
    
</body>

</html>