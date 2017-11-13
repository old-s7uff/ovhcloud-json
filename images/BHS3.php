<?php
header('Content-Type: application/json');
$json_array = array(
    "IMAGE" => array(
      "GRA3-DEBIAN9" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "GRA3",
            "name" => "Debian 9",
            "minDisk" => "0",
            "size" => "1.46484375",
            "creationDate" => "2017-10-09",
            "minRam" => "0",
            "user" => "debian",
            "id" => "370cd41a-efbc-43a6-a8e8-038ddc70079b",
            "type" => "linux",
            "username" => "debian",
            "extraCost" => "0"
        ),
    )
);
$images = json_encode($json_array);
echo $images;
?>
