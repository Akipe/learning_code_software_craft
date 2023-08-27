<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Exportateur;

use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Carre;
use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Point;
use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Cercle;

class ExportateurFormeJSON implements IExportateurForme
{
    private string $json;

    public function __construct()
    {
        $this->json = "{" . PHP_EOL;
    }

    public function inspecterPoint(Point $point): void
    {
        $this->json .=
        "\"point\": {\"nom\": " . $point->getNom() . ", \"coordoneeX\": " . $point->getCoordonneeX() . ", \"coordoneeY\": " . $point->getCoordonneeY() . " },"
        . PHP_EOL;
    }

    public function inspecterCercle(Cercle $cercle): void
    {
        $this->json .=
        "\"cercle\": {\"nom\": " . $cercle->getNom() . "\", \"rayon\": " . $cercle->getRayon() . " },"
        . PHP_EOL;
    }

    public function inspecterCarre(Carre $carre): void
    {
        $this->json .=
        "\"carre\": {\"nom\": " . $carre->getNom() . "\", \"longueur_ab\": " . $carre->getLongueurAB() . " },"
        . PHP_EOL;
    }

    public function getExport(): string
    {
        return \rtrim($this->json, ",") . PHP_EOL . "}";
    }
}
