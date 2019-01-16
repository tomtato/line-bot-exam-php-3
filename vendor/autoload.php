<?php
require "vendor/autoload.php";
$access_token = '9BbaBbfiXNgwe48mBEpXPzwChYQb5CceNxNIBtcJqvDezFewHmxP0NnjvW6zbVcGfzkgSCzvRbxIk9ak4iLQbQLo9fl+ufMGjWaof7cNHLnRJS7ORrJQhafFGVrAN9AZOW3kRDz/87F0jK1sCPPw2wdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'b374bd6aac329abce0bdb5a7a8a576fc
';
$idPush = 'U871c968a616d1dd759b09eff54bd333'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
