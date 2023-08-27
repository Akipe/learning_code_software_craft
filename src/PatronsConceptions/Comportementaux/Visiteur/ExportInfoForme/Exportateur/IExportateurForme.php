<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Exportateur;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Carre;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Point;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Cercle;

interface IExportateurForme
{
  public function inspecterPoint(Point $point): void;
  public function inspecterCercle(Cercle $cercle): void;
  public function inspecterCarre(Carre $carre): void;
  public function getExport(): string;
}
