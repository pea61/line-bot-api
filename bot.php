<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '612267b30611391102bb30914c81caf6';
$access_token  = '+4/Z+EHBaxHl7S2zOBzFc9gS2ak/OQExy+wTddDkwUwgEWxabUWzaxgcXohNH7fYXxerqJx3otWj0OqohFtMLwSJy6fEEYarDN9KVKol7BYg4AVMz0eCsf5QAkl+wqm+/eVmNL4LjDR1Taq0YBzYwdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
