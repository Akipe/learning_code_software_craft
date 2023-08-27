<?php

namespace Akipe\Learning\PatronsConceptions\Structurels\Composite\FormeMultiple\Graphique;

interface IGraphique
{
    public function dessiner();
    public function deplacer(int $x, int $y);
    public function effacer();
}
