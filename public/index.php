<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

require '../app/container.php';
///HOMEVIEWS
$app->get('/', \App\Controllers\HomeController::class. ':home');
$app->get('/banner', \App\Controllers\HomeController::class. ':bannner');
$app->get('/first-numbers', \App\Controllers\HomeController::class. ':firstNumbers');
$app->get('/expertise', \App\Controllers\HomeController::class. ':expertise');
$app->get('/second-numbers', \App\Controllers\HomeController::class. ':secondNumbers');
$app->get('/team', \App\Controllers\HomeController::class. ':team');
$app->get('/partners', \App\Controllers\HomeController::class. ':partners');

//FORMS
$app->get('/contact', \App\Controllers\DataController::class. ':getContact')->setName('contact');
$app->post('/contact', \App\Controllers\DataController::class. ':postContact');
$app->get('/call', \App\Controllers\DataController::class. ':getCall');
$app->post('/post-call', \App\Controllers\DataController::class. ':postCall')->setName('call');

$app->run();