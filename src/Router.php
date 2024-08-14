<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

class Router
{
    public mixed $update;

    public function __construct()
    {
        $this->update = json_decode(file_get_contents('php://input'));
    }

    public function isTelegram(): bool
    {
        return isset($this->update->message ); //TODO:explaned how it works
    }
    
      
    public function get(string $path, callable $callback): void 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === $path) {
            $callback();
        }        
    }

    public function post(string $path, callable $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $path) {
            $callback();
        }             
    }
}
