<?php
declare (strict_types=1);
require_once "vendor/autoload.php";
$router = new Router();


if ($router->isTelegram()) {
    require 'controller/bot/bot.php';
    return;
}

require'routes/web.php' ;