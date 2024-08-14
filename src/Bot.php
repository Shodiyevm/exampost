<?php

use GuzzleHttp\Client;

class Bot {

    private $tApi;
    private $client;
    private $pdo;

    public function __construct() {
        $this->tApi = "https://api.telegram.org/bot" . $_ENV['BOT_TOKEN'] . "/";
        $this->client = new Client(['base_uri' => $this->tApi]);
        $this->pdo = DB::connect();
    }

    public function sendMessage($chat_id, string $text) {
        $this->client->post('sendMessage', [
            'form_params' => [
                'chat_id' => $chat_id,
                'text' => $text
            ]
        ]);

        
    }
    public function handleStartCommand(int $chatId = 791952688) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE chat_id = :chatId");
        $stmt->bindParam(':chatId', $chatId);
        $stmt->execute();
        $user = $stmt->fetch();

        if (!$user) {
            $stmt = $this->pdo->prepare("INSERT INTO users (chat_id) VALUES (:chatId)");
            $stmt->bindParam(':chatId', $chatId);
            $stmt->execute();
 
        }
        if ($user) 
            {
                $stmt = $this->pdo->prepare("SELECT * FROM posts ORDER BY created_at DESC LIMIT 1");
                $stmt->execute();
                $posts = $stmt->fetchAll();
                foreach ($posts as $post) {
                    $this->sendMessage($chatId, $post['content']);
                }
            }
    }

     
}
