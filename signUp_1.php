<!DOCTYPE html>
<html>
<head>

    <title>Create an account | HANDI</title>
    <!--<script src="script/jquery-2.1.1.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="script/test.js"></script>
    <script src="script/stormpath.js"></script>
    <!-- jQuery file。must be add before bootstrap.min.js -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

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
            margin: 40px 0;
        }

        .input-group {
            margin-bottom: 15px; /*modify the margin space for the input*/
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
        <div class="row   margin-base-vertical">
            <div class="col-md-8 panel panel-default col-md-offset-2">
                <div class="col-md-6">

                    <!--<script type="text/javascript">-->
                    <!--var RecaptchaOptions = {-->
                    <!--theme: 'clean'-->
                    <!--};-->
                    <!--</script>-->
                    <form accept-charset="UTF-8" id="new_user_form"> <!-- action to post form data to url -->
                        <!--<input name='then' type='hidden'>-->
                        <!--<input name='captcha_secret' type='hidden'>-->

                        <fieldset class="input-group">  <!--Firefox and fieldsets--->
                            <legend>Creat an account</legend>


                            <!--inputs for user details-->
                            <div class="form-group">
                                <label class="control-label" for="user_givenname">givenname</label>
                                <!--<span class="input-group-addon">Given name</span>-->
                                <div>
                                    <input autofocus="autofocus" type="text" id="user_givenname" class="form-control"
                                           placeholder="Your first name" name="webgivenname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="user_surname">surname</label>
                                <!--<span class="input-group-addon">Surname</span>-->
                                <div>

                                    <input type="text" id="user_surname" class="form-control" placeholder="Surname"
                                           name="websurname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="user_username">username</label>
                                <!--<span class="input-group-addon">Username</span>-->
                                <div>
                                    <input type="text" id="user_username" class="form-control" placeholder="Username"
                                           name="webusername">
                                </div>
                            </div>


                            <div class="form-group password" id="web_user_password">
                                <label class="control-label" for="user_password">password</label>
                                <!--<span class="input-group-addon">Password</span>-->
                                <div>

                                    <input autocomplete="off"
                                           type="password" class="form-control"
                                           placeholder="At least 6 characters"
                                           id="user_password"
                                           maxlength="50"
                                           name="webpassword"
                                        >
                                </div>
                            </div>


                            <div class="form-group password" id="web_user_password_confirmation">
                                <label class="control-label" for="user_password_confirmation">password
                                    confirmation</label>
                                <!--<span class="input-group-addon">confirmation</span>-->
                                <div>
                                    <input type="password" class="form-control"
                                           autocomplete="off"
                                           id="user_password_confirmation"
                                           maxlength="50"
                                           name="webpasswordconfirmation"
                                           placeholder="Enter it again"
                                        >
                                </div>
                            </div>
                            <div class="form-group string" id="web_user_email">
                                <!-- to hide label using .sr-only-->
                                <label class="control-label" for="user_email">Email
                                    address</label>
                                <!--<span class="input-group-addon">Email address</span>-->
                                <div>
                                    <input id="user_email"
                                           type="email" class="form-control"
                                           placeholder="Valid email address"
                                           maxlength="120"
                                           name="webemailaddress"
                                        >
                                </div>
                            </div>
                        </fieldset>

                        <label class="checkbox">
                            <input type="checkbox"/>By signing up you agree to the Terms of
                            Service and the Privacy Policy
                        </label>

                        <div class='form-actions'>
                            <input class="btn btn-primary btn-block-phone btn-large create"
                                   id="btnSubmit" name="commit" value="Sign Up"/>
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


<!--edit the css of footer here-->
<div id="footer" style="">
    <div class="container">
        <a href='http://handihealth.org/'>
            <!--<img alt='HANDI HEALTH' src='http://handihealth.org/wp-content/uploads/2013/02/Header-RGB1.jpg'>-->
        </a>

        <p class="muted credit">Copyright &copy; 2014 <a href="http://handihealth.org">HANDI HEAHLTH.</a>
        </p>
    </div>
</div>


<!--<!--add js function to submit the data-->-->
<!--<script>-->
<!--transport_form_data("submit-email-address", ":input:not(input[type=hidden]):first");-->
<!--</script>-->

</html>