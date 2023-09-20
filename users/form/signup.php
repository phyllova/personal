<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-signup.php';

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success Trade Mill | Create an Account</title>
    <link rel="icon" href="" type="image/png" />
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
    <section style="height: auto;" class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row p-md-5 py-5">
                <div class="col-lg-12">
                    <div class="card rounded login-page">
                        <div class="card-body">
                            <div class="row pl-md-3">
                                <div
                                    class="col-md-5 d-none d-lg-flex align-items-center justify-content-center bg-primary rounded">
                                    <div class="text-center">
                                        <h2 class="text-white mb-0">Create Your Account</h2>
                                        <p class="text-white p-2">Join our community and get started with your new account today!</p>
                                        <img src="themes/purposeTheme/assets/img/account.webp" alt=""
                                            class="w-75">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="text-center">
                                        <a href="/">
                                            <img src="
                                            storage/app/public/photos/logo.svg" alt="Logo"
                                                class="w-50">
                                        </a>
                                    </div>
                                    <div>
                                        
                                    </div>

                                    <?php sysfunc::html_notice( $temp->msg ); ?>

                                    <form action="<?php echo sysfunc::sanitize_input($_SERVER["PHP_SELF"]);?>" method="POST" action="register" class="mt-4 login-form">
                                    <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Username <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input type="text" id="input1" class="pl-5 form-control"
                                                            name="username" id="input1"
                                                            placeholder="Enter Unique Username" value="<?php echo $username; ?>"required>
                                                            <span class="help-block text-danger small"><?php echo $username_err; ?></span>

                                                                                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Full Name <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                        <input type="text" class="pl-5 form-control" name="name"
                                                            value="<?php echo $fullname; ?>" id="f_name"
                                                            placeholder="Enter FullName" required>

                                                                                                            </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="bonus"   value="<?php echo $rb;?>">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input type="email" class="pl-5 form-control" name="email"
                                                            value="<?php echo $email; ?>" id="inp"
                                                            placeholder="name@example.com" required><span class="help-block text-danger small"><?php echo $email_err; ?></span>

                                                                                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                                        <input type="phone" class="pl-5 form-control" name="phone"
                                                            value="<?php echo $phone; ?>" id="phone"
                                                            placeholder="Enter Phone number" required>
                                                                                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="pl-5 form-control" name="password"
                                                            id="password" value="<?php echo $password; ?>" placeholder="Enter Password" required><span class="help-block text-danger small"><?php echo $password_err; ?></span>
                                                                                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="pl-5 form-control"
                                                            name="password_confirmation"
                                                            value="<?php echo $cpassword; ?>"
                                                            id="confirm-password" placeholder="Confirm Password" required>

                                                                                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <i data-feather="" class="fea icon-sm icons"></i>
                                                        <select
                                                            class="pl-5 d-block w-100 px-2 py-2 border border-light rounded-right"
                                                            name="country" id="country" required>
                                                            <option selected disabled>Choose Country</option>
                                                            <?php foreach( sysfunc::countries() as $key => $country ): ?>
                                                            <option value="<?php echo $key; ?>"><?php echo $country; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Referral ID</label>
                                                    <div class="position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input type="text" class="pl-5 form-control"
                                                            name="ref_by" placeholder="Optional referral id" value="<?php echo $refcode; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                              <div style="padding: 20px;">
                                                <label style="display: block;" for="accept-terms">
                                                  <input type="checkbox" id="inp" name="terms">
                                                  By signing up I confirm and accept the <a href="/terms.php">terms of use</a>, and consent to the processing of my personal and biometric data as stated in the <a href="terms.php"> privacy policy</a>
                                                </label>
                                              </div>

                                            
                                                                                        
                                            <!--end col-->

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-block pad"
                                                        type="submit" name="submit">Register</button>
                                                </div>
                                            </div>
                                            
                                            <div class="text-center col-12">
                                                <p class="mb-0"><small class="mr-2 text-dark">Already have an account
                                                    </small> <a href="index.php"
                                                        class="text-dark font-weight-bold">Login</a></p>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
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
        <script>
        $('#input1').on('keypress', function(e) {
            return e.which !== 32;
        });
    </script>
    <script src="livewire/livewire.js?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '/trade';window.livewire_token = 'b9s7PusfJm5WepiwCJpkCYHHsKizhtZD9ci2pqhd';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.4/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>
