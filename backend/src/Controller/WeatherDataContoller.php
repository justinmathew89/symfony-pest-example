<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WeatherDataContoller extends AbstractController
{
    #[Route('/api/weather/{cityName}', name: 'app_weather_data_contoller')]
    public function getWeather($cityName): JsonResponse
    {
        return new JsonResponse([
            'city' => $cityName,
            'temperature' => [
                'min' => '20°C',
                'max' => '30°C'
            ],
            'conditions' => 'Cloudy'
        ]);
    }
}
