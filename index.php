<?php

require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

if (strpos($uri, "?") > 0) {
    $uri = explode("?", $uri)[0];
}

if ($uri === '/') {
    $uri = 'home';
}

$templates = new League\Plates\Engine('app/templates/');

if($templates->exists($uri)) {
    echo $templates->render($uri);
} else {
    echo $templates->render('error/404');
}