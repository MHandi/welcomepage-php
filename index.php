<!DOCTYPE html>
<html>
<head>

    <title>Welcome | HANDI</title>

    <!-- jQuery file。must be add before bootstrap.min.js -->
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>

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
            font-size: 14px;
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
            margin: 160px 0;
        }

        .for-user-content {
            margin-bottom: 35px; /*modify the margin space for the input*/
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: small;
            height: 70px; /* Height of the footer */
            margin-inside: 10px;
        }

    </style>


</head>

<body>

<div class="container-fluid margin-base-vertical">

    <section class='frame primary'>
        <div class='row-fluid'>

            <div class="col-md-8 col-md-offset-2 panel panel-default">

                <h1>Welcome</h1>

                <div class="for-user-content">
                    HANDI is a not-for-profit venture that seeks to facilitate the creation of a world where openness,
                    collaboration and the transformational power of digital technology improves the health and
                    well-being of people and helps health and care and care professionals deliver high quality
                    compassionate care.
                </div>

                <button onclick="location.href = 'wp_sign_up.php';" class="btn btn-primary float-left submit-button">
                    Create an Account
                </button>

                <button onclick="location.href = 'wp_sign_in.html';" class="btn btn-primary float-left submit-button">
                    Sign In
                </button>


            </div>
        </div>
    </section>
    <!--row -->


</div>
<!--container-->

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