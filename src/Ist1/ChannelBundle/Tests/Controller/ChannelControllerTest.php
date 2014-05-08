<?php

namespace Ist1\ChannelBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChannelControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $router = $client->getContainer()->get('router');
        $crawler = $client->request('GET', $router->generate('channel', array(
            'channelCategory' => 'football',
        )));

        $this->assertTrue($crawler->filter('html:contains("Sky Sports | Football")')->count() > 0);
        $this->assertSame($crawler->filter('.item.list-group-item')->count(), 18, 'Number of items should be 18');
    }

    public function testIndexWithNewsCategory()
    {
        $client = static::createClient();
        $router = $client->getContainer()->get('router');
        $crawler = $client->request('GET', $router->generate('channel', array(
            'channelCategory' => 'football',
            'newsCategory' => 'report',
        )));

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($crawler->filter('html:contains("Sky Sports | Football")')->count() > 0);
        $this->assertSame($crawler->filter('.item.list-group-item')->count(), 10, 'Number of items should be 10');
    }
}
