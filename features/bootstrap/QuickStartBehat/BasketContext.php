<?php

use Akipe\LearningCodeSoftwareCraft\BDD\QuickStartBehat\Basket;
use Akipe\LearningCodeSoftwareCraft\BDD\QuickStartBehat\Shelf;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
* Defines application features from the specific context.
*/
class BasketContext implements Context
{
  private Shelf $shelf;
  private Basket $basket;

  /**
  * Initializes context.
  *
  * Every scenario gets its own context instance.
  * You can also pass arbitrary arguments to the
  * context constructor through behat.yml.
  */
  public function __construct()
  {
    $this->shelf = new Shelf();
    $this->basket = new Basket($this->shelf);
  }

  /**
  * @Given there is a :product, which costs €:price
  *
  * @param string $product
  * @param float $price
  * @return void
  */
  public function thereIsAWhichCostsPs(string $product, float $price): void
  {
    $this->shelf->setProductPrice($product, \floatval($price));
  }

  /**
  *
  * @When I add the :product to the basket
  *
  * @param string $product
  * @return void
  */
  public function iAddTheToTheBasket(string $product): void
  {
    $this->basket->addProduct($product);
  }

  /**
  *
  * @Then I should have :count product(s) in the basket
  *
  * @param int $count
  * @return void
  */
  public function iShouldHaveProductInTheBasket(int $count): void
  {
    PHPUnit\Framework\Assert::assertCount(
      intval($count),
      $this->basket
    );
  }

  /**
  *
  * @Then the overall basket price should be €:price
  *
  * @param float $price
  * @return void
  */
  public function theOverallBasketPriceShouldBe(float $price): void
  {
    PHPUnit\Framework\Assert::assertSame(
      floatval($price),
      $this->basket->getTotalPrice()
    );
  }
}
