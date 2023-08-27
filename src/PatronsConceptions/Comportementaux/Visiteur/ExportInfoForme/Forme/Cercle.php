<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme;

use Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Calcul\Trigonometrie;

class Cercle
{
    public function __construct(
        private Point $centre,
        private Point $pointCercle,
        private string $nom,
    ) {
    }

    public function getCoordonnees(): array
    {
        return [
        $this->centre,
        $this->pointCercle,
        ];
    }

    public function getRayon(): float
    {
        return Trigonometrie::getDistanceEntreDeuxPoint(
            $this->centre,
            $this->pointCercle
        );
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
}
