<?php
/**
 * Created by PhpStorm.
 * User: Yujie
 * Date: 31/10/14
 * Time: 12:49
 */
require 'vendor/autoload.php';
$email = $_POST['email'];

//this is a static setup of apikey. it is not secure.
$apiKeyProperties = "apiKey.id=X6WWM95FE5YVOT5WIPQRLRGNX\napiKey.secret=/Yc+/ibdJi7p8hC4xcVbCxJTrdD96RvXuf2pi0wTrEg";
\Stormpath\Client::$apiKeyProperties = $apiKeyProperties;
$builder = new \Stormpath\ClientBuilder();
$client = $builder->setApiKeyProperties($apiKeyProperties)->build();

$apps = $client->tenant->applications;
$apps->search = array('name' => 'welcome');
$application = $apps->getIterator()->current();

try {
    if ($application->sendPasswordResetEmail($email)) {

        echo "<script> alert('please check your email and will go to sign in webpage.');parent.location.href='wp_sign_in.html'; </script>";
        //header("location: wp_sign_in.html");   // add another webpage.

    }
} catch (\Guzzle\Common\Exception\ExceptionCollection $e) {
    $e->getMessage();
}


?>