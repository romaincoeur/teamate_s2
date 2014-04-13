<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 02/04/14
 * Time: 15:42
 */


// src/Rc/TeamateBundle/DataFixtures/ORM/LoadGameData.php
namespace Rc\TeamateBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Rc\TeamateBundle\Entity\Game;

class LoadGameData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $game1 = new Game();
        $game1->setFormat('5 vs 5');

        $game2 = new Game();
        $game2->setFormat('5 vs 5');

        $game3 = new Game();
        $game3->setFormat('5 vs 5');

        $game4 = new Game();
        $game4->setFormat('5 vs 5');

        $em->persist($game1);
        $em->persist($game2);
        $em->persist($game3);
        $em->persist($game4);

        $em->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}