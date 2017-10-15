<?php
header('Content-Type: application/json');
$json_array = array(
    "SSH" => array(
      "GRA3" => array(
            "name" => "THATSME",
            "id" => "5a3239765a32786c",
            "region" => "GRA3"
        ),
      "SBG3" => array(
            "name" => "THATSME2",
            "id" => "5a3239765a32786c",
            "region" => "GRA3"
        ),
    )
);
$json_obj = json_encode($json_array);
echo $json_obj;
?>
