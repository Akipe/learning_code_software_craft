<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Structurels\Composite\FormeMultiple\Graphique\Compose;

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Structurels\Composite\FormeMultiple\Graphique\IGraphique;

class ComposeForme implements IGraphique
{
  /**
   * @param IGraphique[] $listeGraphiques
   * @return void
   */
  public function __construct(
    private array $listeGraphiques,
  )
  {
  }

  public function dessiner()
  {
    foreach($this->listeGraphiques as $graphique) {
      $graphique->dessiner();
    }
  }

  public function deplacer(int $x, int $y)
  {
    foreach($this->listeGraphiques as $graphique) {
      $graphique->deplacer($x, $y);
    }
  }

  public function effacer()
  {
    foreach($this->listeGraphiques as $graphique) {
      $graphique->effacer();
    }
  }

  public function ajouter(IGraphique $graphique)
  {}

  public function remote(IGraphique $graphique)
  {}
}

