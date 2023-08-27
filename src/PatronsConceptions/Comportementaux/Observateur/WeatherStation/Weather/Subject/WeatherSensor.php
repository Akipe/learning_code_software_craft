<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Subject;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Number\RandomGenerator;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IWeatherSubject;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IWeatherObserver;

class WeatherSensor implements IWeatherSubject
{
  /**
   * @var IWeatherObserver[]
   */
  private array $observers;
  private float $temperature;
  private float $humidity;
  private float $pressure;

  public function __construct()
  {
    $this->observers = [];

    // On génère des nombres aléatoire pour simuler les capteurs
    $this->temperature = RandomGenerator::getBetweenZeroOne() * 10;
    $this->humidity = RandomGenerator::getBetweenZeroOne() * 10;
    $this->pressure = RandomGenerator::getBetweenZeroOne() * 10;
  }

  public function subscribeWeatherObserver(IWeatherObserver $observer): void
  {
    if (!in_array($observer, $this->observers, true)) {
      $this->observers[] = $observer;
    }
  }

  public function unsubscribeWeatherObserver(IWeatherObserver $observer): void
  {
    foreach($this->observers as $key => $subscribeObserver) {
      if ($subscribeObserver === $observer) {
        unset($this->observers[$key]);
        break;
      }
    }
  }

  public function notifyWeatherObserver(): void
  {
    foreach($this->observers as $observer) {
      $observer->refreshWeatherSubject(
        $this->getTemperature(),
        $this->getHumidity(),
        $this->getPressure()
      );
    }
  }

  public function getTemperature(): float
  {
    return $this->temperature;
  }

  public function getHumidity(): float
  {
    return $this->humidity;
  }

  public function getPressure(): float
  {
    return $this->pressure;
  }

  public function updateMeasure(): void
  {
    $this->temperature = RandomGenerator::increaseOrDecreaseBetweenZeroOne(
      $this->temperature
    );
    $this->humidity = RandomGenerator::increaseOrDecreaseBetweenZeroOne(
      $this->humidity
    );
    $this->pressure = RandomGenerator::increaseOrDecreaseBetweenZeroOne(
      $this->pressure
    );

    $this->notifyWeatherObserver();
  }
}
