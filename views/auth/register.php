<?php
include("config/enviroment.php");
?>
    <!DOCTYPE html>
    <html
        lang="en"
        class="light-style layout-wide customizer-hide"
        dir="ltr"
        data-theme="theme-default"
        data-template="vertical-menu-template-no-customizer">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Register | <?=@SITE_NAME?></title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?=APP_URL?>assets/admin/img/favicon/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
            rel="stylesheet" />

        <!-- Icons -->
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/fonts/fontawesome.css" />
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/fonts/tabler-icons.css" />
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/fonts/flag-icons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/css/rtl/core.css" />
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/css/rtl/theme-default.css" />
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/libs/node-waves/node-waves.css" />
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/libs/typeahead-js/typeahead.css" />
        <!-- Vendor -->
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/libs/@form-validation/umd/styles/index.min.css" />

        <!-- Page CSS -->
        <!-- Page -->
        <link rel="stylesheet" href="<?=APP_URL?>assets/admin/vendor/css/pages/page-auth.css" />

        <!-- Helpers -->
        <script src="<?=APP_URL?>assets/admin/vendor/js/helpers.js"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="<?=APP_URL?>assets/admin/js/config.js"></script>
    </head>

<body>
<!-- Content -->
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body" style="background: honeydew;">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="/" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                      <img width="70%" src="<?= APP_URL ?>assets/admin/img/logo.webp" alt="">
                  </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 pt-2">Adventure starts here 🚀</h4>

                    <form id="formAuthentication" class="mb-3"  method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                                <label class="form-check-label" for="terms-conditions">
                                    I agree to
                                    <a href="javascript:void(0);">privacy policy & terms</a>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">Register</button>
                    </form>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="/login">
                            <span>Login instead</span>
                        </a>
                    </p>

                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

<!-- / Content -->
<?php
include "views/admin/includes/footer.php";
?>