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

//メッセージが文字以外ならｎメッセージのみで終了
if($type != "text"){
	$res1 = [
		"type" => "text",
		"text" => "ごめんね、メッセージじゃないのを送られても何もできないんだ・・・"
	];
	
//メッセージが文字なら開始
} else if ($text == 'A1:はい' || $text == 'A1:いいえ') {
	
	$res1 = [
		"type" => "template",
		"altText" => "物事を客観的に考えるタイプ？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "物事を客観的に考えるタイプ？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A2:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A2:いいえ"
				]
			]
		]
	];
} else if ($text == 'A2:はい' || $text == 'A2:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "机とか本棚は整理整頓されている方が好き？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "机とか本棚は整理整頓されている方が好き？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A3:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A3:いいえ"
				]
			]
		]
	];
} else if ($text == 'A3:はい' || $text == 'A3:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "新しいグループに早く馴染める方？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "新しいグループに早く馴染める方？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A4:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A4:いいえ"
				]
			]
		]
	];
} else if ($text == 'A4:はい' || $text == 'A4:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "ひとつひとつ物事を終わらせてから次の事をするタイプ？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "ひとつひとつ物事を終わらせてから次の事をするタイプ？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A5:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A5:いいえ"
				]
			]
		]
	];
} else if ($text == 'A5:はい' || $text == 'A5:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "休みの日は友達や同僚と過ごすことが多い？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "休みの日は友達や同僚と過ごすことが多い？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A6:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A6:いいえ"
				]
			]
		]
	];
} else if ($text == 'A6:はい' || $text == 'A6:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "きちんと段階を踏んで話すタイプ？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "きちんと段階を踏んで話すタイプ？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A7:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A7:いいえ"
				]
			]
		]
	];
} else if ($text == 'A7:はい' || $text == 'A7:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "他人の悩みに共感しやすい？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "他人の悩みに共感しやすい？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A8:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A8:いいえ"
				]
			]
		]
	];
} else if ($text == 'A8:はい' || $text == 'A8:いいえ') {
	$res1 = [
		"type" => "template",
		"altText" => "物事は基本的に白黒はっきりつけたい派？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "物事は基本的に白黒はっきりつけたい派？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A9:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A9:いいえ"
				]
			]
		]
	];
} else if ($text == 'A9:はい' || $text == 'A9:いいえ') {
	$res1 = [
		"type" => "text",
		"text" => "君にピッタリのマイライフプランアドバイザーはこの人たちだよ♪\n候補が３人いるんだけど、どのアドバイザーさんがいいかな？"
	];
	
	$res2 = [
		"type" => "text",
		"text" => "「相談する」をタップすると君と僕と選んだアドバイザーさんのLINEグループが作成されるよ！"
	];
	
	$res3 = [
		"type" => "template",
		"altText" => "君にピッタリのマイライフプランアドバイザーはこの人たちだよ♪\n候補を３人ご案内しています。",
		"template" => [
			"type" => "carousel",
			"columns" => [
				[
					"thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/eishoku1.png",
					"title" => "竹岩 祐子",
					"text" => "この人にする？",
					"actions" => [
						[
							"type" => "uri",
							"label" => "相談する",
							"uri" => "https://" . $_SERVER['SERVER_NAME'] . "/"
						]
					]
				],
				[
					"thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/eishoku2.png",
					"title" => "福田 泰造",
					"text" => "この人にする？",
					"actions" => [
						[
							"type" => "uri",
							"label" => "相談する",
							"uri" => "https://" . $_SERVER['SERVER_NAME'] . "/"
						]
					]
				],
				[
					"thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/eishoku3.png",
					"title" => "佐藤 誠子",
					"text" => "この人にする？",
					"actions" => [
						[
							"type" => "uri",
							"label" => "相談する",
							"uri" => "https://" . $_SERVER['SERVER_NAME'] . "/"
						]
					]
				]
			]
		]
	];
	
	// 相談開始をしたい言葉
} else if ($text == 'ライト！くん！'){	
	$res1 = [
		"type" => "text",
		"text" => "こんにちは！！\n僕ライト！くんです。ライト！"
	];
	
	$res2 = [
		"type" => "template",
		"altText" => "保険で何か悩んでいることとかあるかな？",
		"template" => [
			"type" => "confirm",
			"text" => "保険で何か悩んでいることとかあるかな？",
			"actions" => [
				[
					"type" => "message",
					"label" => "ある",
					"text" => "ある"
				],
				[
					"type" => "message",
					"label" => "ない",
					"text" => "ない"
				]
			]
		]
	];
} else if ($text == 'ある') {
	$res1 = [
		"type" => "text",
		"text" => "どんな悩みなのか聞かせてよ！できることなら力になるよ！"
	];
} else if ($text == 'ない') {
	$res1 = [
		"type" => "text",
		"text" => "悩んでないのなら大丈夫だね！\n安心したよ！ライト！"
	];
} else if ($text == '紹介して！') {
	$res1 = [
		"type" => "text",
		"text" => "そしたら今からいくつか質問をするから、それに答えてね！\n相性バッチリ！のマイライフプランアドバイザーを見つけるよ！"
	];
	
	$res2 = [
		"type" => "template",
		"altText" => "人付き合いは好き？",
		"template" => [
			"type" => "confirm",
			"text" => "人付き合いは好き？",
			"actions" => [
				[
					"type" => "message",
					"label" => "はい",
					"text" => "A1:はい"
				],
				[
					"type" => "message",
					"label" => "いいえ",
					"text" => "A1:いいえ"
				]
			]
		]
	];
} else if ($text == '今はいいや') {
	$res1 = [
		"type" => "text",
		"text" => "そっかぁ・・・\nまた今度困ったことがあったら呼んでね！ライト！"
	];
} else if ($text == 'マイライフプランアドバイザーの竹岩です！') {
	$res1 = [
		"type" => "text",
		"text" => "こんにちは！\nアドバイザーは個別LINEへの返信は出来ないから気を付けてね！"
	];
} else if ($text == '新宿でお願いします') {
	$res1 = [
		"type" => "text",
		"text" => "新宿のお店を紹介するね！"
	];
	
	$res2 = [
		"type" => "template",
		"altText" => "新宿のお店",
		"template" => [
			"type" => "carousel",
			"columns" => [
				[
					"thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/mise1.png",
					"title" => "カフェA",
					"text" => "ここにする？",
					"actions" => [
						[
							"type" => "message",
							"label" => "ここに決定",
							"text" => "1番"
						]
					]
				],
				[
					"thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/mise2.png",
					"title" => "ファストフードB",
					"text" => "ここにする？",
					"actions" => [
						[
							"type" => "message",
							"label" => "ここに決定",
							"text" => "2番"
						]
					]
				],
				[
					"thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/mise3.png",
					"title" => "ファミリーレストランC",
					"text" => "ここにする？",
					"actions" => [
						[
							"type" => "message",
							"label" => "ここに決定",
							"text" => "3番"
						]
					]
				]
			]
		]
	];
} else if ($text == '1番') {
	$testtext = "20日14時、新宿のカフェAだね！\nお悩み解決できるよう僕もがんばるよ！";
	
	$res1 = [
		"type" => "text",
		"text" => $testtext
	];
} else {	
	$nlcurl = "https://watson-api-explorer.mybluemix.net/natural-language-classifier/api/v1/classifiers/b238f1x131-nlc-1159/classify";
	$nlcch = curl_init($nlcurl);
	$USERNAME = "02248a63-76ff-4dc8-92b5-a80944b077ed";
	$PASSWORD = "2nEYStPrVjHB";
	$array = array("text" => $text);
	$postdata  = json_encode($array);
	curl_setopt($nlcch, CURLOPT_POST, true);
	curl_setopt($nlcch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($nlcch, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt($nlcch, CURLOPT_USERPWD, $USERNAME.":".$PASSWORD);
	curl_setopt($nlcch, CURLOPT_TIMEOUT_MS, 5000);
	curl_setopt($nlcch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
	$nlcresult = curl_exec($nlcch);
	$resultjson = json_decode($nlcresult, true);
	$cls = $resultjson["classes"][0]["class_name"];
	curl_close($nlcch);
	
//	$cls = str_replace('\\', '\', $cls);

	$res1 = [
		"type" => "text",
		"text" => $cls
	];
	
		
	$res2 = [
		"type" => "template",
		"altText" => "よかったら君にピッタリのマイライフプランアドバイザーを紹介させてほしいんだけど、どうかな？",
		"template" => [
			"type" => "confirm",
			"text" => "よかったら君にピッタリのマイライフプランアドバイザーを紹介させてほしいんだけど、どうかな？",
			"actions" => [
				[
					"type" => "message",
					"label" => "紹介して！",
					"text" => "紹介して！"
				],
				[
					"type" => "message",
					"label" => "今はいいや",
					"text" => "今はいいや"
				]
			]
		]
	];
}

// 送信データ作成
if ($res3) {
	$post_data = [
		"replyToken" => $replyToken,
		"messages" => [$res1,$res2,$res3]
	];
} else if ($res2) {
	$post_data = [
		"replyToken" => $replyToken,
		"messages" => [$res1,$res2]
	];
} else {
	$post_data = [
		"replyToken" => $replyToken,
		"messages" => [$res1]
	];
}


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
