<?php



require "vendor/autoload.php";

$access_token = 'Mdw5+0PXg2SddX7CUl/VafbJ21DfguIFUw645n8zpnQ32mWZOxCM9Q1nGUlMYP5dXVRdm1jJajkgrervc8/pN8hhy0eziVvVuZWmE8CmZlnAasiOQQbFbEvdEOb/hCS73A3oNrxOdC9chF0KV92jnwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '578640bf617eb30f72cf32386a405e4e';

$pushID = 'Udf3e802040b36afd3eb46205ecdbfb8b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







