<?php
// ------------------------------------------------------
header("Content-Type: application/json; charset=UTF-8");
// ------------------------------------------------------

// =========================================================== 
require __DIR__ . '/ovh-api/vendor/autoload.php';
use \Ovh\Api;
$applicationKey = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$applicationSecret = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$consumer_key = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$thisis = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$endpoint = 'ovh-ca';
$cloud = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
// ===========================================================
$conn = new Api(    $applicationKey,
                    $applicationSecret,
                    $endpoint,
                    $consumer_key);
// ===========================================================
// ===========================================================
function cloudovh_gnum($size) {
        $alpha_key = '';
        $keys = range('A', 'Z');
        for ($i = 0; $i < 2; $i++) {
                $alpha_key .= $keys[array_rand($keys)];
        }
        $length = $size - 2;
        $key = '';
        $keys = range(0, 9);
        for ($i = 0; $i < $length; $i++) {
                $key .= $keys[array_rand($keys)];
        }
        return $alpha_key . $key;
}

$thatkey = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$sshName = cloudovh_gnum(10);
$get = $conn->post('/cloud/project/xxxxxxxxxxxxxxxxxxxxxxxxxxxxx/sshkey', array(
         'name' => "$sshName",
         'publicKey' => "$thatkey",
         'region' => NULL,
));
// ===========================================================
// PUSH OUTPUT IN JSON.
 $myJSON = json_encode($get);
 $decjs = json_decode($myJSON, true);
 $getname = $decjs['name'];
 $getid = $decjs['id'];
 echo "Your SSH NAME : $getname";
 echo "";
 echo "Your SSH ID : $getid";
// ===========================================================
?>
