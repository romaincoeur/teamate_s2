<?php

namespace Teamate\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function viewModuleAction()
    {
        $user = $this->getUser();
        if ($user === null)
        {
            return $this->render('TeamateUserBundle:Default:notconnected.html.twig');
        }
        else
        {
            return $this->render('TeamateUserBundle:Default:connected.html.twig');
        }
    }
}
