<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
	/**
	 * 			TEST FUNCIONALES
	 * 
	 * Prueba la carga de la pagina principal del blog
	 */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Blogify', $crawler->filter('')->text());
    }

    /**
     * Prueba la carga del articulo por urls invalidas 
     */ 
    public function testArticuloBadURL()
    {
    	$client =static::createClient();

    	$crawler = $client->request('GET','/articulo/1');

    	$this->assertNotEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Blogify', $crawler->filter('')->text());	
    }

    public function testArticuloURL()
    {
    	$client = static::createClient();

    	$crawler = $client->request('GET','/articulo/1/asd');

    	$this->assertEquals(200,$client->getResponse()->getStatusCode());
    }
}
