<?php

namespace MobileBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mobile/register');

        $this->assertContains('something', $client->getResponse()->getContent());
    }

}
