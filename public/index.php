<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

require '../app/container.php';

$app->get('/', \App\Controllers\HomeController::class. ':home');
$app->get('/banner', \App\Controllers\HomeController::class. ':bannner');
$app->get('/first-numbers', \App\Controllers\HomeController::class. ':firstNumbers');
$app->get('/expertise', \App\Controllers\HomeController::class. ':expertise');
$app->get('/second-numbers', \App\Controllers\HomeController::class. ':secondNumbers');
$app->get('/team', \App\Controllers\HomeController::class. ':team');
$app->get('/partners', \App\Controllers\HomeController::class. ':partners');
$app->get('/contact', \App\Controllers\HomeController::class. ':getContact')->setName('contact');
$app->post('/contact', \App\Controllers\HomeController::class. ':postContact');

$app->run();