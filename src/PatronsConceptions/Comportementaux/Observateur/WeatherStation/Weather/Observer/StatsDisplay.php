<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Observer;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IDisplay;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface\IWeatherObserver;

class StatsDisplay implements IWeatherObserver, IDisplay
{
  /**
   * @var float[]
   */
  private array $historyTemperature;
  /**
   * @var float[]
   */
  private array $historyHumidity;
  /**
   * @var float[]
   */
  private array $historyPression;

  public function __construct()
  {
    $this->historyTemperature = [];
    $this->historyHumidity = [];
    $this->historyPression = [];
  }

  public function refreshWeatherSubject(
    $temperature,
    $humidity,
    $pression
  ): void {
    $this->addCurrentWeatherStatToHistory(
      $temperature,
      $humidity,
      $pression
    );

    $this->display();
  }

  public function display(): void
  {
    echo "Stats weather :";
    for ($id = 0; $id < $this->getNumberStats(); $id++) {
      echo "t° {$this->historyTemperature[$id]} ";
      echo "hum {$this->historyHumidity[$id]} ";
      echo "pres {$this->historyPression[$id]},". PHP_EOL;
    }
  }

  private function addCurrentWeatherStatToHistory(
    $temperature,
    $humidity,
    $pression
  ): void {
    $currentDateTime = new \DateTime('now');

    $this->historyTemperature[] = $temperature;
    $this->historyHumidity[] = $humidity;
    $this->historyPression[] = $pression;
  }

  private function getNumberStats(): int
  {
    return count($this->historyTemperature);
  }
}
