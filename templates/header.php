<header class="foi-header">
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
    </header>