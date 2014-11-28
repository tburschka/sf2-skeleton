<?php

namespace Core\Bundle\CoreBundle\Tests\Controller;

use \Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{

    public function testIndexAction()
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals('Hello World!', $crawler->filter('h1')->first()->html());
    }
}
