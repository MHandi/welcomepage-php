<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Fail to create an account | HANDI</title>

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
            width: 100%;
            font-size: small;
            height: 70px; /* Height of the footer */
        }


    </style>


</head>

<body>

<div class="container-fluid margin-base-vertical  ">

    <section class='frame primary '>
        <div class='row-fluid'>

            <div class="col-md-8 col-md-offset-2 panel panel-default">

                <h1>Sorry, create account fails</h1>

                <div class="for-user-content">
                    <?php
                    echo "Sorry, there some problems about your registered data.";
                    echo "<br>";
                    ?>
                    <p style="font-size: large; font-family: 'Helvetica Neue'; color:darkred;padding: 15px ">

                        <?php
                        echo $_SESSION['error_message'];
                        session_destroy();
                        ?>
                    </p>
                    Please go back to the register page and try again.
                </div>
                <div class="for-user-content">
                    If you have problems,
                    please see our
                    <a href="">FAQ</a>
                    for troubleshooting tips regarding signup.
                    If these steps do not resolve your issue, contact us at
                    <a href="mailto:yujie@handihealth.org">yujie@handihealth.org</a>
                    or on IRC.
                </div>
                <div class="for-user-content">
                    <!--change the main page link here-->

                    <button class="btn btn-default btn-success" onclick="goBack()">Go Back page</button>
                    <script>
                        function goBack() {
                            window.history.back()
                        }
                    </script>

                </div>
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
                &#64 2014 Handi Health Community Interest Company - Registered in England number 07999302 Registered
                Office
                (Not for routine correspondence): The Oakley, Kidderminster Rd, Droitwich, Worcestershire. WR9 9AY
            </div>
            <div class='pull-right'>Copyright &copy; 2014 HandiHealth.org.</div>
        </div>
    </section>
</footer>


</html>