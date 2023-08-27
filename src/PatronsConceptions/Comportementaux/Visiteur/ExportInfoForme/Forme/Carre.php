<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Calcul\Trigonometrie;

class Carre
{
  public function __construct(
    private Point $sommetA,
    private Point $sommetB,
    private Point $sommetC,
    private Point $sommetD,
    private string $nom,
  )
  {}

  public function getCoordonnees(): array
  {
    return [
      $this->sommetA,
      $this->sommetB,
      $this->sommetC,
      $this->sommetD,
    ];
  }

  public function getNom(): string
  {
    return $this->nom;
  }

  public function setNom(string $nom): void
  {
    $this->nom = $nom;
  }

  public function getLongueurAB(): float
  {
    return $this->getLongueurCote($this->sommetA, $this->sommetB);
  }

  public function getLongueurBC(): float
  {
    return $this->getLongueurCote($this->sommetB, $this->sommetC);
  }

  public function getLongueurCD(): float
  {
    return $this->getLongueurCote($this->sommetC, $this->sommetD);
  }

  public function getLongueurDA(): float
  {
    return $this->getLongueurCote($this->sommetD, $this->sommetA);
  }

  private function getLongueurCote(
    Point $premiereExtremite,
    Point $secondeExtremite
  ): float {
    return Trigonometrie::getDistanceEntreDeuxPoint(
      $premiereExtremite,
      $secondeExtremite
    );
  }
}
