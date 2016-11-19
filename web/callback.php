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
		"text" => "ｊメッセージじゃないのを送られても何もできないんだ・・・"
	];
	
	$res2 = [
		"type" => "sticker",
		"packageId" => "18",
		"stickerId" => "2"
	];
	
//メッセージが文字なら開始
} else if ($text == 'A1:はい' || $text == 'A1:いいえ') {
	
	$res1 = [
		"type" => "template",
		"altText" => "Q2:物事を客観的に考えるタイプ？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "Q2:\n物事を客観的に考えるタイプ？",
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
		"altText" => "Q3:机とか本棚は整理整頓されている方が好き？（はい／いいえ）",
		"template" => [
			"type" => "confirm",
			"text" => "Q3:\n机とか本棚は整理整頓されている方が好き？",
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
    "altText" => "Q4:新しいグループに早く馴染める方？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "Q4:\n新しいグループに早く馴染める方？",
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
}
else if ($text == 'A4:はい' || $text == 'A4:いいえ') {
  $res1 = [
    "type" => "template",
    "altText" => 
"Q5:ひとつひとつ物事を終わらせてから次の事をするタイプ？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "Q5:\nひとつひとつ物事を終わらせてから次の事をするタイプ？",
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
}
else if ($text == 'A5:はい' || $text == 'A5:いいえ') {
  $res1 = [
    "type" => "template",
    "altText" => "Q6:休みの日は友達や同僚と過ごすことが多い？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "Q6:\n休みの日は友達や同僚と過ごすことが多い？",
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
}
else if ($text == 'A6:はい' || $text == 'A6:いいえ') {
  $res1 = [
    "type" => "template",
    "altText" => "Q7:きちんと段階を踏んで話すタイプ？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "Q7:\nきちんと段階を踏んで話すタイプ？",
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
}
else if ($text == 'A7:はい' || $text == 'A7:いいえ') {
  $res1 = [
    "type" => "template",
    "altText" => "Q8:他人の悩みに共感しやすい？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "Q8:\n他人の悩みに共感しやすい？",
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
}
else if ($text == 'A8:はい' || $text == 'A8:いいえ') {
  $res1 = [
    "type" => "template",
    "altText" => "Q9:物事は基本的に白黒はっきりつけたい派？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "Q9:\n物事は基本的に白黒はっきりつけたい派？",
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
}
else if ($text == 'A9:はい' || $text == 'A9:いいえ') {
  $res1 = [
    "type" => "template",
    "altText" => "Q10:何か保険で困っていることってある？（自由入力）",
    "template" => [
        "type" => "confirm",
        "text" => "Q10:\n何か保険で困っていることってある？（自由入力）",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "A10:はい"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "A10:いいえ"
            ]
        ]
    ]
  ];
}
else if ($text == 'A10:はい' || $text == 'A10:いいえ') {
	$res1 = [
    "type" => "template",
    "altText" => "君にピッタリのマイライフプランアドバイザーはこの人たちだよ♪\n候補を３人ご案内しています。",
    "template" => [
      "type" => "carousel",
      "columns" => [
          [
            "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . 
"/planner01.png",
            "title" => "竹岩 祐子",
            "text" => "この人にしますか？",
            "actions" => [
              [
                  "type" => "uri",
                  "label" => "相談する",
                  "uri" => "https://" . $_SERVER['SERVER_NAME'] . "/"
              ]
            ]
          ],
          [
            "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . 
"/planner02.png",
            "title" => "福田 泰三",
            "text" => "この人にしますか？",
            "actions" => [
              [
                  "type" => "uri",
                  "label" => "相談する",
                  "uri" => "https://" . $_SERVER['SERVER_NAME'] . "/"
              ]
            ]
          ],
          [
            "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . 
"/planner03.png",
            "title" => "保井 花子",
            "text" => "この人にしますか？",
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
	
} else {
	//セッションの開始（一番最初に記述）
// 	session_start();
	//まずグローバル変数を初期化
// 	$_SESSION = array();
	//セッションを破壊
// 	session_destroy();
	
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
}


// 送信データ作成
if ($flag) {
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
