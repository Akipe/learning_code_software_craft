<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Observer;

use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Number\RandomGenerator;
use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IDisplay;
use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IWeatherObserver;

class ForecastDisplay implements IWeatherObserver, IDisplay
{
    private float $temperature;
    private float $humidity;
    private float $pression;

    public function refreshWeatherSubject($temperature, $humidity, $pression): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pression = $pression;

        $this->display();
    }

    public function display(): void
    {
        echo "Forecast weather :
      temperature next hour -> {$this->forecastWeather($this->temperature)}
      humidity next hour -> {$this->forecastWeather($this->humidity)}
      pression next hour -> {$this->forecastWeather($this->pression)}" . PHP_EOL;
    }

    private function forecastWeather(float $stat): float
    {
        return RandomGenerator::increaseOrDecreaseBetweenZeroOne($stat);
    }
}
