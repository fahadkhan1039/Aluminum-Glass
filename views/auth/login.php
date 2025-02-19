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

        <title>Login | <?=@SITE_NAME?></title>

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
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">
        <style>
            /* Absolute Center Spinner */
            .loading {
                position: fixed;
                z-index: 999;
                height: 2em;
                width: 2em;
                overflow: show;
                margin: auto;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
            }

            /* Transparent Overlay */
            .loading:before {
                content: '';
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

                background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
            }

            /* :not(:required) hides these rules from IE9 and below */
            .loading:not(:required) {
                /* hide "loading..." text */
                font: 0/0 a;
                color: transparent;
                text-shadow: none;
                background-color: transparent;
                border: 0;
            }

            .loading:not(:required):after {
                content: '';
                display: block;
                font-size: 10px;
                width: 1em;
                height: 1em;
                margin-top: -0.5em;
                -webkit-animation: spinner 150ms infinite linear;
                -moz-animation: spinner 150ms infinite linear;
                -ms-animation: spinner 150ms infinite linear;
                -o-animation: spinner 150ms infinite linear;
                animation: spinner 150ms infinite linear;
                border-radius: 0.5em;
                -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
                box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
            }

            /* Animation */

            @-webkit-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            @-moz-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            @-o-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            @keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
        </style>
    </head>

<body>
<div id="loader" class="loading">Loading&#8230;</div>
<!-- Content -->
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card">
                    <div class="card-body" style="background: linear-gradient(180deg, rgba(16,16,16,1) 0%, rgba(43,43,37,1) 100%);
">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="/" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                      <img width="70%" src="<?= APP_URL ?>assets/admin/img/logo.webp" alt="">
                  </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2">Welcome to <?= @SITE_NAME ?>! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>

                        <form method="post"  onsubmit="return do_login();">
                            <?=set_csrf()?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="/forget-password">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
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
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="button" onclick="do_login()" name="login" id="btn" class="btn btn-primary d-grid w-100">Login</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="/register">
                                <span>Create an account</span>
                            </a>
                        </p>

                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->
<?php
include "views/backend/includes/footer.php";
?>
<script src="https://unpkg.com/notie"></script>

<script>
    // Get the input field
    var input = document.getElementById("password");
    // Execute a function when the user presses a key on the keyboard
    input.addEventListener("keypress", function(event) {
        // If the user presses the "Enter" key on the keyboard
        if (event.key === "Enter") {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("btn").click();
        }
    });
    // LOGIN AND SIGNUP JS
    function do_login()
    {
        var email=$("#email").val();
        var pass=$("#password").val();
        var csrf_token=$("input[name=csrf]").val();
        if(email!="" && pass!="")
        {
            $("#loader").css({"display":"block"});
            $.ajax
            ({
                type:'post',
                url:'/check/login',
                data:{
                    do_login:"do_login",
                    email:email,
                    password:pass,
                    csrf:csrf_token,
                },
                success:function(response) {
                    response=$.parseJSON(response);
                    if(response['statusCode']=="200")
                    {
                        notie.alert({type: 'success', text: response.message, time: 2})
                        window.location.href="/dashboard";
                    }else if(response['statusCode']=="202"){
                        $("#loader").css({"display":"none"});
                        $(".email").addClass("input-focus-danger");
                        $(".password").addClass("input-focus-danger");
                        notie.alert({type: 'error', text: response.message, time: 5})
                    }
                    else
                    {
                        $(".email").addClass("input-focus-danger");
                        $(".password").addClass("input-focus-danger");
                        $("#loader").css({"display":"none"});
                        notie.alert({type: 'error', text: response.message, time: 5})
                    }
                }
            });
        }
        else
        {
            $(".email").addClass("input-focus-danger");
            $(".password").addClass("input-focus-danger");
            notie.alert({type: 'error', text: 'Missing Required Input', time: 5})
        }
        return false;
    }
</script>
