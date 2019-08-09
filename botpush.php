<?php



require "vendor/autoload.php";

$access_token = 'A23owLZhy2aSey5zEO7xcAfeiBM7blI+O1YtAP0K19toHH1UqzqDmc6MHN0/bmnkxNsSNtoXf/ly3pLU/o/02H85IzJjzS6HylQlh6jhot8RQx4mJ4x4JxTAntfYTjtXcuun8xyhuSkPFRMzxoUOWwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4ebd298ae499cbebc8a0c98b1bc424cd';

$pushID = 'Udf3e802040b36afd3eb46205ecdbfb8b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







