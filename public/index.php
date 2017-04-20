<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

require '../app/container.php';

$app->get('/', \App\Controllers\PageController::class. ':home');
$app->get('/banner', \App\Controllers\PageController::class. ':bannner');
$app->get('/first-numbers', \App\Controllers\PageController::class. ':firstNumbers');
$app->get('/expertise', \App\Controllers\PageController::class. ':expertise');
$app->get('/second-numbers', \App\Controllers\PageController::class. ':secondNumbers');
$app->get('/team', \App\Controllers\PageController::class. ':team');
$app->get('/partners', \App\Controllers\PageController::class. ':partners');
$app->get('/contact', \App\Controllers\PageController::class. ':getContact')->setName('contact');
$app->post('/contact', \App\Controllers\PageController::class. ':postContact');

$app->run();