<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-signin.php';

?>
    
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="b9s7PusfJm5WepiwCJpkCYHHsKizhtZD9ci2pqhd">
    <title>Success Trade Mill | Account Login</title>

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
        <section style="height: 100vh;" class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card rounded border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7 d-none d-md-flex align-items-center justify-content-center">
                                    <div>
                                        <h2 class="mb-0">Welcome Back!</h2>
                                        <p class="">Please enter your login credentials to access your account.</p>
                                        <img src="themes/purposeTheme/assets/img/login.png" alt=""
                                            class="w-100">
                                    </div>
                                </div>
                                <div class="col-md-5 pt-md-4">
                                    <div>
                                        <div class="text-center">
                                            <a href="/">
                                                <img src="storage/app/public/photos/logo.svg"
                                                    alt="Logo" class="w-50">
                                            </a>
                                        </div>
                                                                                                                    </div>
                                    <h4 class="text-center card-title d-md-none d-block"> Log In</h4>
                                    <?php sysfunc::html_notice( $temp->msg ); ?>
                                    <form action="<?php echo sysfunc::sanitize_input($_SERVER["PHP_SELF"]);?>" method="POST" action="login" class="mt-4">
                                      <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name="email"
                                                    value="<?php echo $email; ?>" id="email"
                                                    placeholder="name@example.com" required>
                                                    <span class="small help-block text-danger"><?php echo $email_err; ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password"
                                                    id="password" placeholder="Enter Password" required>
                                                    <span class="help-block small text-danger mt-1"><?php echo $password_err; ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                        name="remember">
                                                    <label class="custom-control-label" for="customCheck1">Remember
                                                        me</label>
                                                </div>
                                                <a href="reset.php"
                                                    class="text-dark font-weight-bold">
                                                    <small>Forgot password ?</small>

                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="submit" type="submit" class="btn btn-primary btn-block pad" onclick="return validate();" value="Sign In">
                                        </div>
                                                                                <div class="text-center form-group">
                                            <p class="mt-3 mb-0">
                                                <small class="mr-2 text-dark">Don't have an account?</small>
                                                <a href="signup.php" class="text-dark font-weight-bold">Sign
                                                    Up</a>
                                            </p>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <small class="text-dark" style="font-size: 11px">
                                            &copy;2023 Success Trade Mill - All Rights Reserved.
                                        </small>
                                    </div>
                                </div>
                            </div>

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
        <script src="users/livewire/livewire.js?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '/trade';window.livewire_token = 'b9s7PusfJm5WepiwCJpkCYHHsKizhtZD9ci2pqhd';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.4/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>
