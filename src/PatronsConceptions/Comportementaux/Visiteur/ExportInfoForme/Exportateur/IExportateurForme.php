<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Exportateur;

use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Carre;
use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Point;
use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Cercle;

interface IExportateurForme
{
    public function inspecterPoint(Point $point): void;
    public function inspecterCercle(Cercle $cercle): void;
    public function inspecterCarre(Carre $carre): void;
    public function getExport(): string;
}
