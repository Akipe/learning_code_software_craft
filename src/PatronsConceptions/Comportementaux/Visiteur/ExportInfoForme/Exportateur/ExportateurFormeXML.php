<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Exportateur;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Carre;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Point;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Cercle;

class ExportateurFormeXML implements IExportateurForme
{
  private string $xml;

  public function __construct()
  {
    $this->xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>". PHP_EOL;
  }

  public function inspecterPoint(Point $point): void
  {
    $this->xml .=
    "</point nom=\"". $point->getNom() ."\" coordoneeX=\"". $point->getCoordonneeX() . "\" coordoneeY=\"" . $point->getCoordonneeY() ."\">"
    . PHP_EOL;
  }

  public function inspecterCercle(Cercle $cercle): void
  {
    $this->xml .=
    "</cercle nom=\"". $cercle->getNom() ."\" rayon=\"". $cercle->getRayon() ."\">"
    . PHP_EOL;
  }

  public function inspecterCarre(Carre $carre): void
  {
    $this->xml .=
    "</cercle nom=\"". $carre->getNom() ."\" longueur_ab=\"". $carre->getLongueurAB() ."\">"
    . PHP_EOL;
  }

  public function getExport(): string
  {
    return $this->xml;
  }
}
