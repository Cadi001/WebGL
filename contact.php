<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Hopper</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                includedLanguages: 'en,ja,tl,ar,ko', 
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: true
            }, 'google_translate_element');
        }
    </script>
</head>

<body>
    <?php
        include("templates/header.php");
    ?>

    <main>
        <div class="container"><br>
            <section class="contact-content">
                <div class="contact-widget media">
                    <img src="assets/images/icon-4.png" alt="monitor" width="50px">
                    <div class="media-body">
                        <h6 class="widget-title">User Concern Email</h6>
                        <p class="widget-content">hello@zipan.com</p>
                    </div>
                </div>
            </section>
            <section class="contact-form-wrapper">
                <form action="index.php">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">YOUR NAME <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">YOUR EMAIL ADDRESS <sup>*</sup></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@zipan.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="subject">SUBJECT <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="subject" placeholder="I-Hopper Concern">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR PHONE NUMBER <sup>*</sup></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+639123456789">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="message">HOW CAN WE HELP YOU? <sup>*</sup></label>
                            <textarea name="message" id="message" class="form-control" rows="7" placeholder="Hi there, ...."></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        <p class="form-footer-text">We'll get back to you as soon as possible.</p>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <?php
        include("templates/footer.php");
        include("templates/scripts.php");
    ?>
    
</body>

</html>