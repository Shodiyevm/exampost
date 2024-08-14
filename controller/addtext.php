<?php
declare(strict_types=1);
(new Post())->create($_POST['text']);
$user = new User();
$users= $user->getAll();
  foreach ($users as $user) {
    $chat_id = $user['chat_id'];
    (new Bot())->sendMessage($chat_id, $_POST['text']);
  }
header('location: /');
exit();