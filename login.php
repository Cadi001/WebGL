<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Hopper - Login</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .error-border {
            border: 1px solid red;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>
    <?php include("templates/header.php"); ?>
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Log In</h2>
                                <p class="auth-section-subtitle">Sign in to your account to continue.</p>
                                <form id="loginForm" action="assets/functions/loginFunc.php" method="POST">
                                    <div class="form-group">
                                        <label for="username_or_email">Username or Email <sup>*</sup></label>
                                        <input type="text" class="form-control" id="username_or_email" name="username_or_email" placeholder="Username or Email *">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password *">
                                    </div>
                                    <div id="errorContainer"></div>
                                    <div class="form-actions-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="keepLogin">
                                            <label class="form-check-label" for="keepLogin">
                                                Keep me logged in
                                            </label>
                                        </div>
                                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Submit</button>
                                </form>
                                <p class="mb-0">
                                    <a href="register.php" class="text-dark font-weight-bold">New User? Sign Up</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="assets/images/login.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php include("templates/scripts.php"); ?>
    <script>
       $(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault(); // Prevent form submission

        // Clear previous errors and reset input styles
        $('#errorContainer').empty();
        $('.form-control').removeClass('error-border');

        // Submit form via AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.errors && response.errors.length > 0) {
                    // Display errors as a list
                    var errorHtml = '<div class="error"><ul>';
                    $.each(response.errors, function(index, error) {
                        errorHtml += '<li>' + error + '</li>';
                    });
                    errorHtml += '</ul></div>';
                    $('#errorContainer').html(errorHtml);

                    // Focus on the appropriate input field and add error class
                    if (response.errors.includes('User not found.') || response.errors.includes('Incorrect password.')) {
                        $('#username_or_email').addClass('error-border').focus();
                        $('#password').addClass('error-border');
                    }
                } else if (response.success) {
                    // Redirect or show success message
                    $('#errorContainer').html('<div class="success">' + response.success + '</div>');
                    // Optionally redirect after success
                    setTimeout(function() {
                        window.location.href = 'index.php'; 
                    }, 2000); // 2 seconds delay before redirecting
                }
            },
            
        });
    });
});

    </script>
</body>
</html>
