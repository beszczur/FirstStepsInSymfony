<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testUserindex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UserIndex');
    }

}
