<?php
$accessToken = getenv('LINE_CHANNEL_ACCESS_TOKEN');


//ユーザーからのメッセージ取得
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);

$type = $jsonObj->{"events"}[0]->{"message"}->{"type"};
//メッセージ取得
$text = $jsonObj->{"events"}[0]->{"message"}->{"text"};
//ReplyToken取得
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};

$response = [
    "type" => "confirm",
    "text" => "Q2:\n物事を客観的に考えるタイプ？",
	"actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "Q2:はい"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "Q2:いいえ"
            ]
        ]
];

$post_data = [
	"replyToken" => $replyToken,
	"messages" => [$response]
	];


$ch = curl_init("https://api.line.me/v2/bot/message/reply");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charser=UTF-8',
    'Authorization: Bearer ' . $accessToken
    ));
$result = curl_exec($ch);
curl_close($ch);
