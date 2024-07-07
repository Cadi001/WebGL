<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Hopper</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }

        .error-border {
            border: 1px solid red;
        }
    </style>
</head>

<body>
<?php
        include("templates/header.php");
    ?>

    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Create account</h2>
                                <p class="auth-section-subtitle">Create your account to continue.</p>
                                <form id="registerForm" action="assets/functions/registerFunc.php" method="POST">
                                    <div class="form-group">
                                        <label for="username">Username <sup>*</sup></label>
                                        <input type="text" class="form-control" id="username" name="username" pattern="[a-zA-Z0-9_]+" placeholder="Username" required>
                                        
                                    </div>
                                    <div id="usernameError" class="error"></div>
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Create account</button>
                                </form>
                                <div id="errorContainer"></div>
                                <p class="mb-0">
                                    <a href="login.php" class="text-dark font-weight-bold">Already have an account? Sign in</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="assets/images/Register.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <?php
    include("templates/scripts.php");
    ?>
    <script>
    $(document).ready(function() {
        $('#username').on('input', function() {
        var input = $(this).val();
        var pattern = /^[a-zA-Z0-9_]+$/;
        
        if(input === "") {
            $(this).removeClass('error-border');
            $('#usernameError').text('');
        }else if (!pattern.test(input)) {
            $(this).addClass('error-border');
            $('#usernameError').text('Username should only contain letters, numbers, and underscores.');
        }else {
            $(this).removeClass('error-border');
            $('#usernameError').text('');
        }
    });
        $('#registerForm').on('submit', function(e) {
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
                        if (response.errors.includes('Username already exists.')) {
                            $('#username').addClass('error-border').focus(); // Focus on username input
                        }
                        if (response.errors.includes('Email already exists.')) {
                            $('#email').addClass('error-border').focus(); // Focus on username input
                        } 
                        
                        if (response.errors.includes('Passwords do not match.') || response.errors.includes('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.')) {
                            $('#password').addClass('error-border').focus(); // Focus on password input
                            $('#confirm_password').addClass('error-border');
                        }
                    } else if (response.success) {
                        // Redirect or show success message
                        $('#errorContainer').html('<div class="success">' + response.success + '</div>');
                        // Optionally redirect after success
                        setTimeout(function() {
                            window.location.href = 'login.php'; // Redirect to login page
                        }, 2000); // 2 seconds delay before redirecting
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status, error);
                }
            });
        });
    });
</script>


</body>

</html>
