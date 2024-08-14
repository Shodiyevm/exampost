<?php

$update = json_decode(file_get_contents('php://input'));

if (isset($update->message)) {
    $text = $update->message->text;
    $chat_id = $update->message->chat->id;

    $bot = new Bot();

    if ($text === "/start") {
       $bot->handleStartCommand($chat_id);
    }
   
}
