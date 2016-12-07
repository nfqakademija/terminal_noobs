<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorkshopControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/workshop/list');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/workshop/show');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/workshop/create');
    }

    public function testUpdate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/worksop/update');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/workshop/delete');
    }
}
