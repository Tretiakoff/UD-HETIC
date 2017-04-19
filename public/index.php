<?php

require '../vendor/autoload.php';


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

require '../app/container.php';

$app->get('/', \App\Controllers\PageController::class. ':home');
$app->get('/contact', \App\Controllers\PageController::class. ':getContact')->setName('contact');
$app->post('/contact', \App\Controllers\PageController::class. ':postContact');

$app->run();