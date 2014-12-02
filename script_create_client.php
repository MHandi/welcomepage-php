<?php
session_start();
require 'vendor/autoload.php';
require_once('recaptchalib.php');

$privatekey = "6LdUCv0SAAAAAKBewjRV4yi9Odx3xp8DGCIAhr6O";
$resp = recaptcha_check_answer($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
//    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
//        "(reCAPTCHA said: " . $resp->error . ")");
    die(header("location: wp_recaptha_wrong.html"));

} else {
    // Your code here to handle a successful verification
    $givenname = $_POST["givenname"];//$_POST["name"]
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

//this is a static setup of apikey. it is not secure.
    $apiKeyProperties = "apiKey.id=X6WWM95FE5YVOT5WIPQRLRGNX\napiKey.secret=/Yc+/ibdJi7p8hC4xcVbCxJTrdD96RvXuf2pi0wTrEg";
    \Stormpath\Client::$apiKeyProperties = $apiKeyProperties;
    $builder = new \Stormpath\ClientBuilder();
    $client = $builder->setApiKeyProperties($apiKeyProperties)->build();

    $apps = $client->tenant->applications;
    $apps->search = array('name' => 'welcome');
    $application = $apps->getIterator()->current();

    $account = \Stormpath\Resource\Account::instantiate(
        array(
            'givenName' => $givenname,  //each name should match to stormpath server
            'surname' => $surname,
            'username' => $username,
            'password' => $password,
            'email' => $email
        )
    );
    try {
        if ($application->createAccount($account)) {
            header("location: wp_creat_success.html");
        }
    } catch (Exception $e) {

        $_SESSION['error_message'] = $e->getMessage();

        header("location: wp_create_failed.php");
//        echo $e->getCode();
//        echo "<br>";
//        echo "errors are :";
//        echo $e->getMessage();

        // will put the data validation on client by JS
    }
}
?>
