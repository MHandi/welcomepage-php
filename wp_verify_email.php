<!DOCTYPE html>
<html>
<head>

    <title>Verify Account | HANDI</title>

    <!-- jQuery file。must be add before bootstrap.min.js -->
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="script/test.js"></script>
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

<div class="container-fluid margin-base-vertical  ">

    <section class='frame primary '>
        <div class='row-fluid'>

            <div class="col-md-8 col-md-offset-2 panel panel-default">

                <h1>Verify your account</h1>

                <?php
                require 'vendor/autoload.php';

                /* USER CREDENTIALS
                /  Fill in the variables below with your SendGrid
                /  username and password.
                ====================================================*/
                $sg_username = "DemoYM";
                $sg_password = "SendGrid123";


                /* CREATE THE SENDGRID MAIL OBJECT
                ====================================================*/
                $sendgrid = new SendGrid($sg_username, $sg_password);
                $mail = new SendGrid\Email();


                /* SEND MAIL
                /  Replace the the address(es) in the setTo/setTos
                /  function with the address(es) you're sending to.
                ====================================================*/
                //                try {
                $mail->
                setFrom("yujie.myler.meng@gmail.com")->
                addTo("yujie.myler.meng@gmail.com")->
                setSubject("Demo Account created ")->
                setText("Hi, An user has created an account by Stormpath database, please check api.stormpath.com")->
                setHtml("<table style=\"border: solid 1px #000; background-color: #666; font-family: verdana, tahoma, sans-serif; color: #fff;\">
<tr> <td> <h2>Hi Ian,</h2> <p>An user has created an account, please check.</p>
 <br> Cheers <br> HandiHealth CIC
<p> <img src=\"http://handihealth.org/wp-content/uploads/2013/02/Header-RGB1.jpg\" alt=\"HandiHealth!\" /> </p></td> </tr> </table>");

                $response = $sendgrid->send($mail);
                /*====================================================
                Following codes are for debugging use
                */

                //                    if (!$response) {
                //                        throw new Exception("Did not receive response.");
                //                    } else if ($response->message && $response->message == "error") {
                //                        throw new Exception("Received error: " . join(", ", $response->errors));
                //                    } else {
                //                        print_r($response);
                //                    }
                //                } catch (Exception $e) {
                //                    var_export($e);
                //                }
                //

                //                this is verify account on stormpath
                //set POST variables
                $token = ltrim($_SERVER["QUERY_STRING"], 'sptoken=');
                $url = 'https://api.stormpath.com/emailVerificationTokens?sptoken=' . $token;
                //https://api.stormpath.com/emailVerificationTokens?sptoken=4mrOjHDWdybREQmfTL00px
                //open connection
                $ch = curl_init();
                //set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                //execute post
                $result = curl_exec($ch);
                //close connection
                curl_close($ch);



                ?>

                <div class="for-user-content">
                    If you cannot login your account,
                    Please see our
                    <a href="">FAQ</a>
                    for troubleshooting tips regarding login.
                    If these steps do not resolve your issue, contact us at
                    <a href="mailto:yujie@handihealth.org">yujie@handihealth.org</a>
                    or on IRC.
                </div>
                <div class="for-user-content">
                    <!--change the main page link here-->
                    <a href="wp_sign_in.html"> << Go to sign in page</a>
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