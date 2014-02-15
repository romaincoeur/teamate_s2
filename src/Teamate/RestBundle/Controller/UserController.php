<?php
# src/Teamate/RestBundle/Controller/UserController.php

namespace Teamate\RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Util\Codes;
use Symfony\Component\HttpFoundation\Request;
use Teamate\RestBundle\Entity\Organisation;
use Teamate\RestBundle\Entity\User;
use Teamate\RestBundle\Form\UserType;

class UserController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Collection get action
     * @var Request $request
     * @var integer $gameId Id of the entity's game
     * @return array
     *
     * @Rest\View()
     */
    public function cgetAction(Request $request, $gameId)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TeamateUserBundle:User')->findBy(
            array(
                'game' => $gameId,
            )
        );

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Get action
     * @var integer $gameId Id of the entity's game
     * @var integer $id Id of the entity
     * @return array
     *
     * @Rest\View()
     */
    public function getAction($gameId, $id)
    {
        $entity = $this->getEntity($gameId, $id);

        return array(
            'entity' => $entity,
        );
    }

    /**
     * Collection post action
     * @var Request $request
     * @var integer $gameId Id of the entity's game
     * @return View|array
     */
    public function cpostAction(Request $request, $gameId)
    {
        $game = $this->getGame($gameId);
        $entity = new User();
        $entity->setGame($game);
        $form = $this->createForm(new UserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectView(
                $this->generateUrl(
                    'get_game_user',
                    array(
                        'gameId' => $entity->getGame()->getId(),
                        'id' => $entity->getId()
                    )
                ),
                Codes::HTTP_CREATED
            );
        }

        return array(
            'form' => $form,
        );
    }

    /**
     * Put action
     * @var Request $request
     * @var integer $gameId Id of the entity's game
     * @var integer $id Id of the entity
     * @return View|array
     */
    public function putAction(Request $request, $gameId, $id)
    {
        $entity = $this->getEntity($gameId, $id);
        $form = $this->createForm(new UserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->view(null, Codes::HTTP_NO_CONTENT);
        }

        return array(
            'form' => $form,
        );
    }

    /**
     * Delete action
     * @var integer $gameId Id of the entity's game
     * @var integer $id Id of the entity
     * @return View
     */
    public function deleteAction($gameId, $id)
    {
        $entity = $this->getEntity($gameId, $id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();

        return $this->view(null, Codes::HTTP_NO_CONTENT);
    }

    /**
     * Get entity instance
     * @var integer $gameId Id of the entity's game
     * @var integer $id Id of the entity
     * @return User
     */
    protected function getEntity($gameId, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TeamateUserBundle:User')->findOneBy(
            array(
                'id' => $id,
                'game' => $gameId,
            )
        );

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find user entity');
        }

        return $entity;
    }

    /**
     * Get game instance
     * @var integer $id Id of the organisation
     * @return Game
     */
    protected function getGame($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TeamateMatchBundle:Game')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find organisation entity');
        }

        return $entity;
    }
}
