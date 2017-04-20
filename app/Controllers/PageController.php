<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Model\Database;

class PageController extends Controller {

    public function home(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/home.twig');
    }

    public function getContact(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/contact.twig');
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

    public function banner(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/banner.twig');
    }
    public function firstNumbers(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/first-numbers.twig');
    }

    public function expertise(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/expertise.twig');
    }

    public function secondNumbers(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/second-numbers.twig');
    }
    public function team(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/team.twig');
    }
    public function partners(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/partners.twig');
    }
}