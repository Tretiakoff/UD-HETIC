<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Model\Database;

class HomeController extends Controller {

    public function home(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'home.html.twig');
    }

    public function banner(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'section/banner.html.twig');
    }
    public function firstNumbers(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'section/first-numbers.html.twig');
    }

    public function expertise(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'section/expertise.html.twig');
    }

    public function secondNumbers(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'section/second-numbers.html.twig');
    }
    public function team(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'section/team.html.twig');
    }
    public function partners(RequestInterface $request, ResponseInterface $response) {

        $this->render($response, 'section/partners.html.twig');
    }
}