<html>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Yujie
 * Date: 31/10/14
 * Time: 11:29
 */
require 'vendor/autoload.php';

// get the user inputs of username and password
$username = $_POST["username"];
$password = $_POST["password"];

//this is a static setup of apikey. it is not secure.
$apiKeyProperties = "apiKey.id=X6WWM95FE5YVOT5WIPQRLRGNX\napiKey.secret=/Yc+/ibdJi7p8hC4xcVbCxJTrdD96RvXuf2pi0wTrEg";
\Stormpath\Client::$apiKeyProperties = $apiKeyProperties;
$builder = new \Stormpath\ClientBuilder();
$client = $builder->setApiKeyProperties($apiKeyProperties)->build();

$apps = $client->tenant->applications;
$apps->search = array('name' => 'welcome');
$application = $apps->getIterator()->current();


//If the login attempt fails, a 400 Bad Request is returned with an error payload explaining why the attempt failed:
try {
//If the login attempt is successful, an AuthenticationResult object is
//returned with a reference to the successfully authenticated account:
    $result = $application->authenticate($username, $password);
    $account = $result->account;
    echo "the successful response is :";
    echo "<br>";
    echo $account;
} catch (\Stormpath\Resource\ResourceError $re) {
    print $re->getStatus(); // Will output: 400
    print $re->getErrorCode(); // Will output: 400
    print $re->getMessage(); // Will output: "Invalid username or password."
    print $re->getDeveloperMessage(); // Will output: "Invalid username or password."
    print $re->getMoreInfo(); // Will output: "mailto:support@stormpath.com"
}





?>
</body>
</html>