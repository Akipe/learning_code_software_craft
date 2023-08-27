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
  private $shelf;
  private $basket;

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
  * @param mixed $product
  * @param mixed $price
  * @return void
  */
  public function thereIsAWhichCostsPs($product, $price)
  {
    $this->shelf->setProductPrice($product, \floatval($price));
  }

  /**
  *
  * @When I add the :product to the basket
  *
  * @param mixed $product
  * @return never
  * @throws PendingException
  */
  public function iAddTheToTheBasket($product)
  {
    $this->basket->addProduct($product);
  }

  /**
  *
  * @Then I should have :count product(s) in the basket
  *
  * @param mixed $count
  * @return never
  * @throws PendingException
  */
  public function iShouldHaveProductInTheBasket($count)
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
  * @param mixed $price
  * @return never
  * @throws PendingException
  */
  public function theOverallBasketPriceShouldBe($price)
  {
    PHPUnit\Framework\Assert::assertSame(
      floatval($price),
      $this->basket->getTotalPrice()
    );
  }
}
