<?php



require "vendor/autoload.php";

$access_token = '9BbaBbfiXNgwe48mBEpXPzwChYQb5CceNxNIBtcJqvDezFewHmxP0NnjvW6zbVcGfzkgSCzvRbxIk9ak4iLQbQLo9fl+ufMGjWaof7cNHLnRJS7ORrJQhafFGVrAN9AZOW3kRDz/87F0jK1sCPPw2wdB04t89/1O/w1cDnyilFU=';

$channelSecret = '2648b2dc120afd2949f96b96a18fd9c7';

$pushID = 'U871c968a616d1dd759b09eff54bd3331';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







