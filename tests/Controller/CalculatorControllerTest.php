<?php
/**
 * Date: 09/04/2018
 * Time: 10:50
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testSum()
    {
        $client = static::createClient();

        $client->request('GET', '/calculator/sum/3/4');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString(
            json_encode(['result' => 7]),
            $client->getResponse()->getContent());
    }
}
