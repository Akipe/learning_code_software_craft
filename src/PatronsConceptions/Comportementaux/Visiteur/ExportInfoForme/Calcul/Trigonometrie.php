<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Calcul;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Point;

class Trigonometrie
{
  public static function getDistanceDeuxCoordonnees(int $a, int $b): float
  {
    return \abs($a - $b);
  }

  /**
  * Utilisation du théorème de Pythagore
  * @param float $distancePremierCote
  * @param float $distanceDeuxiemeCote
  * @return float
  */
  public static function getDistanceHypotenuseTriangle(
    float $distancePremierCote,
    float $distanceDeuxiemeCote
    ) {
      return sqrt(
        ($distancePremierCote ** 2)
        + ($distanceDeuxiemeCote ** 2)
      );
    }

    public static function getDistanceEntreDeuxPoint(Point $a, Point $b)
    {
      $distanceSegmentX = self::getDistanceDeuxCoordonnees(
        $a->getCoordonneeX(),
        $b->getCoordonneeX()
      );
      $distanceSegmentY = self::getDistanceDeuxCoordonnees(
        $a->getCoordonneeY(),
        $b->getCoordonneeY()
      );

      return self::getDistanceHypotenuseTriangle(
        $distanceSegmentX,
        $distanceSegmentY
      );
    }
  }
