<?php
require ('telegram/Telegram.php');
$API_KEY = '335071513:AAHOyZLQineJ0QSuYwpjhL1HLJ969jjNfUo';
$BOT_NAME = 'onlinenobatbot';
$telegram = new Telegram($API_KEY);
$result = $telegram->getData();
$text = $result["message"] ["text"];
$chat_id = $result["message"] ["chat"]["id"];
$content = array('chat_id' => $chat_id, 'text' => "Test");
$telegram->sendMessage($content);
?>
