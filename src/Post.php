<?php

class Post
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $text): bool
    {
        $stmt = $this->pdo->prepare('INSERT INTO posts (content, created_at) VALUES (:text, NOW())');
        $stmt->bindParam(':text', $text);
        return $stmt->execute();
    }
    public function getAll( ) {

        $stmt = $this->pdo->prepare('SELECT * FROM posts');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
