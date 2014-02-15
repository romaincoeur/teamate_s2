<?php

namespace Teamate\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('TeamatePagesBundle:Welcome:index.html.twig');
    }
}
