<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function home($name): Response
    {
        return $this->render('home/index.html.twig',['name' => $name]);
    }
}
