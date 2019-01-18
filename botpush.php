<?php



require "vendor/autoload.php";

$access_token = '8jwuHkkOKAM0eouMDh8T9w0NPsDabh0cud/3jOJTDzw/LonPQFIoAmJfyH9MomPmXVRdm1jJajkgrervc8/pN8hhy0eziVvVuZWmE8CmZlmG6UskBb1Ky6ZmWLXp7OgvYaBNtZpb1csFBzZyUDqLtAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e917658bacf9d344100d371c307ec431';

$pushID = 'Udf3e802040b36afd3eb46205ecdbfb8b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







