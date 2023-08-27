<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface;

interface IWeatherObserver
{
  public function refreshWeatherSubject(
    float $temperature,
    float $humidity,
    float $pression,
  ): void;
}
