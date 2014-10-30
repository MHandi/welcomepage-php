require 'vendor/autoload.php';
$apiKeyFile = $_SERVER['HOME'] .  '/.stormpath/apiKey.properties';
$builder = new \Stormpath\ClientBuilder();
$client = $builder->setApiKeyFileLocation($apiKeyFile)->build();