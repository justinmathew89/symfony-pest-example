<?php
namespace App\Tests\Unit\Controller;

use App\Controller\WeatherDataContoller;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

it('getWeather returns weather data for a given city', function () {

    $weatherController = new WeatherDataContoller();
    expect(json_decode($weatherController->getWeather('London')->getContent()))->toHaveKey('city');
});

//it('getWeather throws error when city is missing', function () {
//
//    $weatherController = new WeatherDataContoller();
//    expect($weatherController->getWeather(''))->toThrow();
//});
