<?php

namespace Akipe\LearningCodeSoftwareCraft\BDD\QuickStartBehat;

final class Shelf
{
  /** @var array<string,int> */
  private array $priceMap;

  public function __construct()
  {
    $this->priceMap = [];
  }

  public function setProductPrice(string $product, float $price): void
  {
    $this->priceMap[$product] = $price;
  }

  public function getProductPrice(string $product): float
  {
    return $this->priceMap[$product];
  }
}
