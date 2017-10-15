<?php
// ------------------------------------------------------
header("Content-Type: application/json; charset=UTF-8");
// ------------------------------------------------------

// ===========================================================
require __DIR__ . '/ovh-api/vendor/autoload.php';
use \Ovh\Api;
$applicationKey = "xxxxxxxxxxxxxxxx";
$applicationSecret = "xxxxxxxxxxxxxxxx";
$consumer_key = "xxxxxxxxxxxxxxxx";
$endpoint = 'ovh-ca';
$cloud = 'b36f60875e81461487af7e854af0f398';
// ===========================================================
$conn = new Api(    $applicationKey,
                    $applicationSecret,
                    $endpoint,
                    $consumer_key);
// ===========================================================

// ===========================================================
// GET DATA FROM OUR JSON.
$get = file_get_contents('https://api.dopehosting.net/ovh-cloud/json/FLAVORS.json');
$json = json_decode($get, true);
$flavor = $json;

$get1 = file_get_contents('https://api.dopehosting.net/ovh-cloud/json/IMAGES.json');
$json1 = json_decode($get1, true);
$image = $json1;

// $get2 = file_get_contents('https://api.dopehosting.net/ovh-cloud/json/SSH.json');
// $json2 = json_decode($get2, true);
// $ssh = $json2;
// ===========================================================

// ===========================================================
// SEND REQ.
$get = $conn->post('/cloud/project/'.$cloud.'/instance', array(
    'flavorId' => "{$flavor['FLAVOR']['GRA3-S1']['id']}", // Instance flavor id (type: string)
    'groupId' => NULL, // Start instance in group (type: string)
    'imageId' => "{$image['IMAGE']['GRA3-U4']['id']}", // Instance image id (type: string)
    'monthlyBilling' => false, // Active monthly billing (type: boolean)
    'name' => 'api-test', // Instance name (type: string)
    'networks' => NULL, // Create network interfaces (type: cloud.instance.NetworkParams[])
    'region' => 'GRA3', // Instance region (type: string)
    'sshKeyId' => '5a3239765a32786c', // SSH keypair id (type: string)
    'userData' => NULL, // Configuration information or scripts to use upon launch (type: text)
    'volumeId' => NULL, // Specify a volume id to boot from it (type: string)
));
// ===========================================================

// ===========================================================
// PUSH OUTPUT IN JSON.
$myJSON = json_encode($get);
echo $myJSON;
// ===========================================================
?>
