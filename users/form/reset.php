<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-reset.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="b9s7PusfJm5WepiwCJpkCYHHsKizhtZD9ci2pqhd">
    <title>Success Trade Mill | Forgot your password</title>

    <link rel="icon" href="storage/app/public/photos/i6KEyIIzscFVLkNd20fCnXsUesrnIemV3XQN3dt8.png" type="image/png" />
    
        <link href="themes/purposeTheme/temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="themes/purposeTheme/temp/css/materialdesignicons.min.css" rel="stylesheet"
            type="text/css" />

        <link rel="stylesheet" href="themes/purposeTheme/temp/css/line.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- Main Css -->
                <link href="themes/purposeTheme/temp/css/style.css" rel="stylesheet" type="text/css" />
        <link href="themes/purposeTheme/temp/css/colors/blue.css" rel="stylesheet">
    
</head>

<body class="bg-soft-primary">
    <section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                    
                     
                        
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">Password Reset</h4>

                            <?php sysfunc::html_notice( $temp->msg ); ?>

                            <form action="<?php echo sysfunc::sanitize_input($_SERVER["PHP_SELF"]);?>" method="POST" action="forgot-password"  class="mt-4 login-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email" value="" id="inp" placeholder="name@example.com" required>
                                                <span class="help-block small text-danger"><?php echo $email_err ?? null; ?></span>
                                            </div>
                                                                                    </div>
                                    </div>
                                    <!--end col-->

                                    
                                    <div class="mb-0 col-lg-12">
                                        <input name="submit" class="btn btn-primary btn-block pad" type="submit" value="Reset Password">
                                    </div>
                                    <!--end col-->


                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Repeat Login
                                                ?</small> <a href="index.php"
                                                class="text-dark font-weight-bold">Login</a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy;2023 Success Trade Mill - All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->




            <script src="themes/purposeTheme/temp/js/jquery-3.5.1.min.js"></script>
        <script src="themes/purposeTheme/temp/js/bootstrap.bundle.min.js"></script>

        <!-- SLIDER -->
        <script src="themes/purposeTheme/temp/js/owl.carousel.min.js"></script>
        <script src="themes/purposeTheme/temp/js/owl.init.js"></script>
        <!-- Icons -->
        <script src="themes/purposeTheme/temp/js/feather.min.js"></script>
        <script src="themes/purposeTheme/temp/js/bundle.js"></script>

        <script src="themes/purposeTheme/temp/js/app.js"></script>
        <script src="themes/purposeTheme/temp/js/widget.js"></script>
    
    <script src="/trade/livewire/livewire.js?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '/trade';window.livewire_token = 'b9s7PusfJm5WepiwCJpkCYHHsKizhtZD9ci2pqhd';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.4/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>