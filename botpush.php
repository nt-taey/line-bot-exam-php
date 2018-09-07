<?php



require "vendor/autoload.php";

$access_token = 'PPLeneSW5Ii33lV/Hxv0muQbev82URJNkZd6uPB2BrYLB5gLHc7UMYJBb+bokXCDQbY+NVYZYEzXcnUbs5xa1eiKoXEviqADUsEk9oESWeL5Run4pPAnElHf3iBHZ/LA4Mi6jwclzLDLiqS0RyksKQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a2262def54e0117f80b780f330069beb';

$pushID = 'Ua903926797d7ccfcb47042ad43ea591e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







