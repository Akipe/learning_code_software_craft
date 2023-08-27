<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Observer;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IDisplay;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IWeatherObserver;

class ConditionsDisplay implements IWeatherObserver, IDisplay
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
    echo "Current weather : t° {$this->temperature}, ";
    echo "humidity {$this->humidity}, ";
    echo "pression {$this->pression}". PHP_EOL;
  }
}
