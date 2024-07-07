<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Hopper</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="foi-header landing-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/ihopper.svg" alt="ihopper">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tutorials.php">Tutorials</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <?php
                            session_start(); // Start or resume session

                            // Check if username and email session variables are set
                            if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
                                // Session variables are set, do something (e.g., display logged-in user info)
                                $username = $_SESSION['username'];
                                $email = $_SESSION['email'];
                            
                        ?>
                            <li class="nav-item mr-2 mb-3 mb-lg-0">
                                <a class="btn btn-secondary" href="logout.php">Logout</a>
                            </li>
                        <?php
                            }else{
                            ?>
                        
                        <li class="nav-item mr-2 mb-3 mb-lg-0">
                            <a class="btn btn-secondary" href="register.php">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" href="login.php">Login</a>
                        </li>
                        <?php
                            }?>
                        <li class="nav-item">
                            <div id="google_translate_element" class="mr-2"></div>
                        </li>
                        
                    </ul>
                    
                </div>
            </nav>
            <div class="header-content">
                <div class="row">
                    <div class="col-md-6">
                        <a class="ihopper-title" >
                            <img src="assets/images/ihoppertitle.svg" alt="ihopper title">
                        </a>
                        <p class="text-dark">The vibrancy of the Philippines in the palm of your hand! A highly customizable digital space where your unique avatar can roam in this novel portal map site - let's GO!</p>
                        <a href="checkLogin.php" class="btn btn-primary mb-4">Try Now</a>
                        <div class="my-2">
                            <p class="header-app-download-title">GET OUR MOBILE APP</p>
                        </div>
                        <div>
                            <button class="btn btn-app-download mr-2"><img src="assets/images/ios.svg" alt="App store"></button>
                            <button class="btn btn-app-download"><img src="assets/images/android.svg" alt="play store"></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/ihopperpc.png" alt="app" width="1500px" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5 mb-5">
        <div class="container">
            <h2 class="section-title">Promotions</h2>
            <div class="row">
                <div class="col-lg-6 mb-6 mb-lg-0">
                    <h5>Angeles City Space Arrival Fest</h5>
                                    <p>1,000 billy awarded for new member registration! 
                                        Get billy just for walking around - up to 5,000 billy!</p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out more</a></p>
                    <h5>Dream Free Shop Plan Unleashed</h5>
                                    <p>For a limited time! Freely operate your shop in the space for 3 months for FREE!
                                        Make your ideal shop a reality now!</p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out more</a></p>
                </div>
                <div class="col-lg-6 mb-6 mb-lg-0">
                    <h5>Customize Your Avatar & Shop with Points</h5>
                                    <p>Use points to create your unique avatar & space exactly as desired!
                                        The era of unleashing your individuality in Angeles City has arrived!</p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out more</a></p>
                    <h5>Come Forth! Supreme Philippine Experience Seekers</h5>
                                    <p>By exploring every corner of the space, you'll earn the revered title of Angeles City Master!
                                        Become a legendary figure who attains the supreme Philippine experience!</p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out more</a></p>
                </div>
                
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0 d-flex justify-content-center">
                    <img src="assets/images/phonemap.png" alt="special offers" class="img-fluid" style="height: auto;">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Application Features</h2>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Avatar Movement</h5>
                                    <p class="text-dark">Enables seamless navigation of the map with avatars capable of walking and roaming for immersive exploration.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Establishment Interaction</h5>
                    <p class="text-dark">Allows avatars to interact with virtual buildings, objects, and activities for enhanced immersion. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Secured Data</h5>
                    <p class="text-dark">Secures user data with encryption, robust access controls, and regular security audits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Social Interaction</h5>
                    <p class="text-dark">Promotes avatar interaction with text chat and group gatherings, boosting virtual community engagement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include("templates/footer.php");
        include("templates/scripts.php");
    ?>
    

    
    
</body>

</html>