<?php
$access_token = '8jwuHkkOKAM0eouMDh8T9w0NPsDabh0cud/3jOJTDzw/LonPQFIoAmJfyH9MomPmXVRdm1jJajkgrervc8/pN8hhy0eziVvVuZWmE8CmZlmG6UskBb1Ky6ZmWLXp7OgvYaBNtZpb1csFBzZyUDqLtAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
