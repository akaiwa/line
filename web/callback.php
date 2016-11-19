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

//メッセージが文字以外なら何もせず終了
if($type != "text"){
	exit;
	
//メッセージが文字なら開始
} else {
	$res1 = [
		"type" => "text",
		"text" => "こんにちは！！\n僕ライト！くんです。ライト！\nあなたにぴったりの保険のエキスパートを紹介するよ♪\nこれから10個の質問をするから答えてね！♪"
	];
	
	$res2 = [
		"type" => "template",
		"altText" => "Q1:人付き合いが好き？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "Q1\n人付き合いが好き？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "Q1:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "Q1:いいえ"
				]
			]
		]
	];
}


// 送信データ作成
$post_data = [
	"replyToken" => $replyToken,
	"messages" => [$res1,$res2]
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
