<?php
$access_token = 'yT1AGiQSM24TLBITUz4+VsBIllwkVrrNs0XhPs93C/yzWeTGkLNdKE4YQruomol7Spa5Wkh+Z5zShOU36jDgsE3USbuvuaZm/uHkDdrUQDLzGkp9gqMM2Rt2qYRorJ9Mvcrtgas0m6WFDaiOc4I2OgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;