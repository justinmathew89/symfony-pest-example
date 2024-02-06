<?php
namespace App\Tests\Feature;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WeatherControllerTest extends WebTestCase
{
    public function testGetWeatherData(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/weather/London');
        $response = $client->getResponse();
        $this->assertResponseIsSuccessful();

        $response = json_decode($response->getContent(), true);

        $this->assertArrayHasKey('city', $response);
        $this->assertSame($response['city'], 'London');
    }
}