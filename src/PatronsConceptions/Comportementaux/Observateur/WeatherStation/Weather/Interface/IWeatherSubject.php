<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Interface;

interface IWeatherSubject
{
  public function subscribeWeatherObserver(IWeatherObserver $observer): void;
  public function unsubscribeWeatherObserver(IWeatherObserver $observer): void;
  public function notifyWeatherObserver(): void;
}
