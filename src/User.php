<?php
class User
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }


    public function getAll( ) {
        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}