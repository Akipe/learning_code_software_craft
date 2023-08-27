<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme;

class Point
{
    public function __construct(
        private int $coordonneeX,
        private int $coordonneeY,
        private string $nom,
    ) {
    }

    public function getCoordonnees(): array
    {
        return [
        $this->coordonneeX,
        $this->coordonneeY,
        ];
    }

    public function getCoordonneeX(): int
    {
        return $this->coordonneeX;
    }

    public function getCoordonneeY(): int
    {
        return $this->coordonneeY;
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
