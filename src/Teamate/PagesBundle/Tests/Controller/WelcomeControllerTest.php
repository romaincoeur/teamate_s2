<?php

namespace Teamate\PagesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WelcomeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals('Teamate\PagesBundle\Controller\WelcomeController::indexAction', $client->getRequest()->attributes->get('_controller'));
    }
}
