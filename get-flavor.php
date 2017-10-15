<?php
header("Content-Type: application/json; charset=UTF-8");
require __DIR__ . '/ovh-api/vendor/autoload.php';
use \Ovh\Api;


$applicationKey = "xx";
$applicationSecret = "xx";
$consumer_key = "xx";
$endpoint = 'ovh-ca';

$cloud = 'xx';

// Get servers list
$conn = new Api(    $applicationKey,
                    $applicationSecret,
                    $endpoint,
                    $consumer_key);                                   
$get = $conn->get('/cloud/project/'.$cloud.'/flavor', array( 
    'region' => 'GRA3',
));
$myJSON = json_encode($get);
echo $myJSON;
?>
