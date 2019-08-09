<?php


$access_token = 'A23owLZhy2aSey5zEO7xcAfeiBM7blI+O1YtAP0K19toHH1UqzqDmc6MHN0/bmnkxNsSNtoXf/ly3pLU/o/02H85IzJjzS6HylQlh6jhot8RQx4mJ4x4JxTAntfYTjtXcuun8xyhuSkPFRMzxoUOWwdB04t89/1O/w1cDnyilFU=';

$userId = '4ebd298ae499cbebc8a0c98b1bc424cd';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

