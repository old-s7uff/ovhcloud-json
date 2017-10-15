<?php
header('Content-Type: application/json');
$json_array = array(
    "FLAVOR" => array(
      "GRA3-S1" => array(
            "outboundBandwidth" => "102",
            "disk" => "10",
            "region" => "GRA3",
            "name" => "s1-2",
            "inboundBandwidth" => "102",
            "id" => "eeb4ccc9-faa0-4afb-955e-6a0224f93055",
            "vcpus" => "1",
            "type" => "ovh.vps-ssd",
            "osType" => "linux",
            "available" => "1",
            "ram" => "2000"
        ),
      "GRA3-S2" => array(
            "outboundBandwidth" => "102",
            "disk" => "20",
            "region" => "GRA3",
            "name" => "s1-4",
            "inboundBandwidth" => "102",
            "id" => "a5bd5b78-4aa5-4d1c-bd18-e9c1898d1894",
            "vcpus" => "1",
            "type" => "ovh.vps-ssd",
            "osType" => "linux",
            "available" => "1",
            "ram" => "4000"
        ),
      "GRA3-S3" => array(
            "outboundBandwidth" => "102",
            "disk" => "40",
            "region" => "GRA3",
            "name" => "s1-8",
            "inboundBandwidth" => "102",
            "id" => "021668a3-623a-40ef-b15d-ba2a69e74a2f",
            "vcpus" => "2",
            "type" => "ovh.vps-ssd",
            "osType" => "linux",
            "available" => "1",
            "ram" => "8000"
        ),
      "SBG3-S1" => array(
            "outboundBandwidth" => "102",
            "disk" => "10",
            "region" => "SBG3",
            "name" => "s1-2",
            "inboundBandwidth" => "102",
            "id" => "35e3c9b8-655f-4622-b34b-8df60cf099d5",
            "vcpus" => "1",
            "type" => "ovh.vps-ssd",
            "osType" => "linux",
            "available" => "1",
            "ram" => "2000"
        ),
      "SBG3-S2" => array(
            "outboundBandwidth" => "102",
            "disk" => "20",
            "region" => "SBG3",
            "name" => "s1-4",
            "inboundBandwidth" => "102",
            "id" => "ac07fd3f-147a-4453-a4ae-851f02c38495",
            "vcpus" => "1",
            "type" => "ovh.vps-ssd",
            "osType" => "linux",
            "available" => "1",
            "ram" => "4000"
        ),
      "SBG3-S3" => array(
            "outboundBandwidth" => "102",
            "disk" => "40",
            "region" => "SBG3",
            "name" => "s1-8",
            "inboundBandwidth" => "102",
            "id" => "97af8010-e4bf-4201-8860-33bacd514f99",
            "vcpus" => "2",
            "type" => "ovh.vps-ssd",
            "osType" => "linux",
            "available" => "1",
            "ram" => "8000"
        ),
    )
);
$json_obj = json_encode($json_array);
echo $json_obj;
?>
