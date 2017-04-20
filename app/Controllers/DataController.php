<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Model\Database;

class DataController extends Controller {

    public function getContact(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'form/contact.html.twig');
    }

    public function postContact(RequestInterface $request, ResponseInterface $response) {

        $lastName = $request->getParam('lastName');
        $firstName = $request->getParam('firstName');
        $email = $request->getParam('email');
        $message = $request->getParam('message');

        $model = new Database($this->container->pdo);
        $model->setContact($lastName, $firstName, $email, $message);

        return ([
            'data' => 'success'
        ]);
    }

    public function getCall(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'form/call.html.twig');
    }

    public function postCall(RequestInterface $request, ResponseInterface $response) {

        $interval = $request->getParam('interval');
        $number = $request->getParam('number');

        $model = new Database($this->container->pdo);
        $model->setCall($interval, $number);

        return ([
            'data' => 'success'
        ]);
    }
}