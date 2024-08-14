<?php


$router -> get ('/', function () {
    require 'view/post.php';
});
$router->post('/text', function () {
    require 'controller/addtext.php';
});


