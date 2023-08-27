<?php

use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Observer\StatsDisplay;
use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Subject\WeatherSensor;
use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Observer\ForecastDisplay;
use Akipe\Learning\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Weather\Observer\ConditionsDisplay;

require __DIR__ . '/../vendor/autoload.php';

$weatherSensor = new WeatherSensor();

$conditionDisplay = new ConditionsDisplay();
$forecastDisplay = new ForecastDisplay();
$statsDisplay = new StatsDisplay();

$weatherSensor->subscribeWeatherObserver($conditionDisplay);
$weatherSensor->subscribeWeatherObserver($forecastDisplay);
$weatherSensor->subscribeWeatherObserver($statsDisplay);

const SECOND_TOTAL_WAIT = 10;
const SECOND_ITERATION_WAIT = 2;

for ($seconds = 0; $seconds < SECOND_TOTAL_WAIT; $seconds += 2) {
    $weatherSensor->updateMeasure();
    sleep(SECOND_ITERATION_WAIT);
}
