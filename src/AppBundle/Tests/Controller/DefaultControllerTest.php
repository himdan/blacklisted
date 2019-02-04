<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('something', $client->getResponse()->getContent());
    }
    public function testContact()
    {

        $client=static::createClient();
        $crawler=$client->request('GET', '/contact');
        $this->assertContains('contact', $client->getResponse()->getContent());
    }
    public function testAboutUs()
    {
        $client=static::createClient();
        $crawler=$client->request('GET', '/aboutus');
        $this->assertContains('Our Team', $client->getResponse()->getContent());
    }
    public function testShowClaim()
    {
        $client=static::createClient();
        $crawler=$client->request('GET', '/claim/15/view');
        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
    public function testShowCategory()
    {
        $client=static::createClient();
        $crawler=$client->request('GET', '/category/1/view');
        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
