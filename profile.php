<?php


$access_token = 'Mdw5+0PXg2SddX7CUl/VafbJ21DfguIFUw645n8zpnQ32mWZOxCM9Q1nGUlMYP5dXVRdm1jJajkgrervc8/pN8hhy0eziVvVuZWmE8CmZlnAasiOQQbFbEvdEOb/hCS73A3oNrxOdC9chF0KV92jnwdB04t89/1O/w1cDnyilFU=';

$userId = 'Udf3e802040b36afd3eb46205ecdbfb8b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

