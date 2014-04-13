<?php

namespace Rc\TeamateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Rc\TeamateBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Request;
use Rc\TeamateBundle\Form\UserType;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RcTeamateBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
        $request = $this->get('request');
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('RcTeamateBundle:Default:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    public function userBlockAction()
    {
        $user = $this->getUser();
        if ($user === null)
        {
            return $this->render('RcTeamateBundle:Default:notconnected.html.twig');
        }
        else
        {
            return $this->render('RcTeamateBundle:Default:connected.html.twig');
        }
    }

    public function registerAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // encode password
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
            $encodedPassword = $encoder->encodePassword($form["rawPassword"]->getData(), $entity->getSalt());
            $entity->setPassword($encodedPassword);


            // enregistrement en BDD
            $em->persist($entity);
            $em->flush();

            // Connexion
            $token = new UsernamePasswordToken($entity, null, 'main', $entity->getRoles());
            $this->get('security.context')->setToken($token);

            // Redirection
            $currentRoute = $request->attributes->get('_route');
            $currentUrl = $this->get('router')
                ->generate($currentRoute, array(), true);
            return $this->redirect($this->generateUrl('myprofile'));
        }

        return $this->render('RcTeamateBundle:Default:register.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('register'),
            'method' => 'POST',
        ));

        return $form;
    }


}
