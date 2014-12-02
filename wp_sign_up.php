<!DOCTYPE html>
<html>
<head>

    <title>Create an account | HANDI</title>
    <script src="script/jquery-2.1.1.min.js"></script>
<!--    <script src="script/test.js"></script>-->
    <script src="script/js_password_verify.js"></script>
    <!-- jQuery file。must be add before bootstrap.min.js -->
    <script src="assets/validator/js/bootstrapValidator.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet"/>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->
    <style>

        /* http://css-tricks.com/perfect-full-page-background-image/ */
        html {
            background: url(assets/bamboo.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            padding-top: 20px;
            font-size: 16px;
            font-family: "Open Sans", serif;
            background: transparent;
        }

        h1 {
            font-family: "Abel", Arial, sans-serif;
            font-weight: 400;
            font-size: 40px;
        }

        /* Override B3 .panel adding a subtly transparent background */
        .panel {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .margin-base-vertical {
            margin: 60px 0;
            margin-inside: 20px;
            margin-top: 20px;
        }
        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: small;
            height: 70px; /* Height of the footer */
            margin-inside: 10px;
        }

    </style>

</head>

<body>


<header>
    <nav class='section-nav' id='nav'>
        <div class='navbar centered'>
            <div class='container'>
                <div class='brand'>
                    <a href="https://handihealth.org/">
                        <div class='brand-image'></div>
                    </a></div>
            </div>
        </div>
    </nav>

</header>
<div id="content" role="main">

    <div class="container-fluid">
        <div>
            <div class="row">
                <div class="col-md-4 col-md-offset-5">
                    <a href='http://handihealth.org/'>
                        <img alt='HANDI HEALTH' src='http://handihealth.org/wp-content/uploads/2013/02/Header-RGB1.jpg'>
                    </a>
                </div>

            </div>

        </div>

        <!--main body here-->
        <div class="row margin-base-vertical">
            <div class="col-md-8 panel panel-default col-md-offset-2">
                <div class="col-md-6">

                    <form role="form" accept-charset="UTF-8" id="new_user_form"
                          action="script_create_client.php" method="POST"
                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
                        >
                        <legend><strong>Creat an account</strong></legend>
                        <!-- action to post form data to url -->
                        <fieldset>  <!--Firefox and fieldsets--->
                            <div class="form-group">
<!--                                <label class="control-label" for="user_givenname">Givenname</label>-->

                                <div>
                                    <input type="hidden" id="user_givenname" class="form-control"
                                           required
                                           data-bv-notempty-message="The given name is required"
                                           placeholder="Your first name" name="givenname" autofocus="autofocus"
                                        value="handiUser"
                                        >
                                </div>
                            </div>

                            <div class="form-group">
<!--                                <label class="control-label" for="user_surname">Surname</label>-->

                                <div>
                                    <input type="hidden" id="user_surname" class="form-control" placeholder="Surname"
                                           required
                                           data-bv-notempty-message="The surname is required"
                                           name="surname"
                                        value="handiUser">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="user_username">Username</label>

                                <div>
                                    <input type="text" id="user_username" class="form-control" placeholder="Username"
                                           required
                                           data-bv-notempty-message="The username is required"
                                           name="username">
                                </div>
                            </div>

                            <div id="identicalForm">

                                <div class="form-group password" id="web_user_password">
                                    <label class="control-label" for="user_password">Password</label>

                                    <div>
                                        <input autocomplete="off"
                                               type="password" class="form-control"
                                               placeholder="Please type 6 chars"
                                               id="user_password"
                                               maxlength="50"
                                               minlength="6"
                                               name="password"
                                               data-bv-identical="true"
                                               data-bv-stringlength-message="Minimum 6 chars"

                                               required
                                               data-bv-notempty-message="The password is required"
                                            >
                                    </div>
                                </div>

                                <div class="form-group password" id="user_password_confirmation">
                                    <label class="control-label" for="user_password_confirmation">Password
                                        confirmation</label>
                                    <div>
                                        <input type="password" class="form-control"
                                               autocomplete="off"
                                               id="user_password_confirmation"
                                               maxlength="50"
                                               name="confirmPassword"
                                               placeholder="Enter password again"
                                               data-bv-identical="true"
                                               data-bv-identical-field="password"
                                               data-bv-identical-message="The password and its confirm are not the same"
                                               required
                                               data-bv-notempty-message="The password confirmation is required"
                                            >
                                    </div>
                                </div>

                            </div>

                            <div class="form-group string" id="web_user_email">
                                <!-- to hide label using .sr-only-->
                                <label class="control-label" for="user_email">Email
                                    address</label>

                                <div>
                                    <input id="user_email"
                                           type="email" class="form-control"
                                           placeholder="Valid email address"
                                           maxlength="120"
                                           name="email"
                                           required
                                           data-bv-notempty-message="The email is required"
                                        >
                                </div>
                            </div>
                        </fieldset>

                        <script type="text/javascript">
                            var RecaptchaOptions = {
                                theme: 'clean'
                            };
                        </script>
                        <?php
                        require_once('recaptchalib.php');
                        $publickey = "6LdUCv0SAAAAAPfNFyYoxFriEqXO2LJAsgG4wpLT"; // you got this from the signup page
                        echo recaptcha_get_html($publickey);
                        ?>
                        <div>
                            <p style="font-size: small">
                                By signing up you agree to the Terms of
                                Service and the Privacy Policy
                            </p>
                        </div>
                        <div class="row">
                            <div class='form-actions col-sm-2'>
                                <input class="btn btn-primary btn-block-phone btn-large create"
                                       id="btnSubmit" name="commit" type="submit" value="Sign Up"/>
                            </div>
                            <div class="col-sm-offset-1 col-sm-9">
                                or<a href="wp_sign_in.html"> sign in with an existing account </a>
                            </div>
                        </div>
                    </form>


                </div>

                <div class="col-md-6">

                    <legend><strong>Add a title here:</strong></legend>


                    <ul class='spaced-items'>
                        <li>content reserve to be modified here.</li>
                        <li>Powerful command line client tools and a web management console to launch and manage your
                            applications
                        </li>
                        <li>Pre-created quickstarts to instantaneously boot your favorite application framework</li>
                        <li>A vibrant community backed by an army of developers, evangelists, and OpenShift devotees.
                        </li>
                        <li>A wide range of developer resources, including technology specific get started pages, how-to
                            blog posts and videos.
                        </li>
                    </ul>
                    <p>


                </div>

            </div>
        </div>
        <!--row -->
    </div>
    <!--container-->
</div>
</body>
<footer>
    <section>
        <div class='container panel-footer'>
            <!--            <a href='http://handihealth.org/'>-->
            <!--                <img alt='HANDI HEALTH' -->
            <!--                     src='http://handihealth.org/wp-content/uploads/2013/02/Header-RGB1.jpg'>-->
            <!--            </a>-->
            <div class="pull-left">
                &#64 2014 Handi Health Community Interest Company - Registered in England number 07999302 Registered Office
                (Not for routine correspondence): The Oakley, Kidderminster Rd, Droitwich, Worcestershire. WR9 9AY
            </div>
            <div class='pull-right'>Copyright &copy; 2014 HandiHealth.org.</div>
        </div>
    </section>
</footer>


</html>