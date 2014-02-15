<?php

namespace Teamate\MatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function searchMatchToolAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('TeamateMatchBundle:Game');

        $listeMatches = $repository->findAll();

        if( $request->isXmlHttpRequest() )
        {
            $response = new Response(xml_encode($listeMatches));

            // Ici, nous définissons le Content-type pour dire que l'on renvoie du JSON et non du HTML
            $response->headers->set('Content-Type', 'text/xml');

            return $response;
        }
        else
        {
            return $this->render('TeamateMatchBundle:Default:searchMatchTool.html.twig', array('listeMatches' => $listeMatches));
        }
    }
}
