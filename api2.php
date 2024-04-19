<?php

$targetURL = 'https://ioszy9.cydias.top/api1';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $targetURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);


echo $response;
?>
