<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Model\Database;

class PageController extends Controller {

    public function home(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/home.html.twig');
    }

    public function getContact(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/contact.html.twig');
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

        $this->render($response, 'pages/banner.html.twig');
    }
    public function firstNumbers(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/first-numbers.html.twig');
    }

    public function expertise(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/expertise.html.twig');
    }

    public function secondNumbers(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/second-numbers.html.twig');
    }
    public function team(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/team.html.twig');
    }
    public function partners(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'pages/partners.html.twig');
    }
}