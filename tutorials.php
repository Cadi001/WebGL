<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Hopper</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
        include("templates/header.php");
    ?>

    <main class="page-blog-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="blog-post-header">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <p class="blog-post-date"></p>
                                <h3 class="blog-post-title">Tutorials</h3>
                            </div>
                        </div>
                    </section>
                    <section class="blog-post-content">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <video class="img-fluid" controls autoplay>
                                    <source src="assets/vid/ihopper.mp4" type="video/mp4">
                                    </video>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <blockquote>
                                    <p>Navigating the I-Hopper World using your keyboard or touchpad to reach specific destinations and access shops</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-5">
                                <img src="assets/images/blog_details_4.jpg" alt="blog details" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <?php
        include("templates/footer.php");
        include("templates/scripts.php");
    ?>
</body>

</html>