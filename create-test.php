<?php
header("Content-Type: application/json; charset=UTF-8");
require __DIR__ . '/ovh-api/vendor/autoload.php';
use \Ovh\Api;
$applicationKey = "x";
$applicationSecret = "x";
$consumer_key = "x";
$endpoint = 'ovh-ca';
$cloud = 'x';
// Get servers list
$conn = new Api(    $applicationKey,
                    $applicationSecret,
                    $endpoint,
                    $consumer_key);                                   
$get = $conn->post('/cloud/project/'.$cloud.'/instance', array(
    'flavorId' => 'eeb4ccc9-faa0-4afb-955e-6a0224f93055', // Instance flavor id (type: string)
    'groupId' => NULL, // Start instance in group (type: string)
    'imageId' => 'd1517a07-bc48-4523-b80c-b22f4e506c9e', // Instance image id (type: string)
    'monthlyBilling' => false, // Active monthly billing (type: boolean)
    'name' => 'api-test', // Instance name (type: string)
    'networks' => NULL, // Create network interfaces (type: cloud.instance.NetworkParams[])
    'region' => 'GRA3', // Instance region (type: string)
    'sshKeyId' => '5a3239765a32786c', // SSH keypair id (type: string)
    'userData' => NULL, // Configuration information or scripts to use upon launch (type: text)
    'volumeId' => NULL, // Specify a volume id to boot from it (type: string)
));
$myJSON = json_encode($get);
echo $myJSON;
?>
