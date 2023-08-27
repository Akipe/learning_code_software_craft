<?php

namespace Akipe\ExampleFormeMultiple\Graphique\Simple;

use Akipe\Learning\PatronsConceptions\Structurels\Composite\FormeMultiple\Graphique\IGraphique;

class Point implements IGraphique
{
    public function __construct(
        private int $x,
        private int $y,
    ) {
    }

    public function dessiner()
    {
        echo ".";
    }

    public function deplacer(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function effacer()
    {
        echo "effacement du point...";
    }
}
