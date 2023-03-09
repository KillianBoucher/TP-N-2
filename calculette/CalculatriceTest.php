<?php
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase {
  public function testAddition() {
    $this->assertEquals(4, addition(2, 2));
    $this->assertEquals(0, addition(-2, 2));
    $this->assertEquals(10.5, addition(7.2, 3.3));
  }

  public function testSoustraction() {
    $this->assertEquals(0, soustraction(2, 2));
    $this->assertEquals(-4, soustraction(-2, 2));
    $this->assertEquals(3.9, soustraction(7.2, 3.3));
  }

  public function testMultiplication() {
    $this->assertEquals(4, multiplication(2, 2));
    $this->assertEquals(-4, multiplication(-2, 2));
    $this->assertEquals(23.76, multiplication(7.2, 3.3));
  }
  public function testDivisionParZero()
  {
      $this->assertEquals('Division par zéro!', division(10, 0));
  }

  public function testDivision()
  {
      $this->assertEquals(2, division(4, 2));
      $this->assertEquals(3, division(9, 3));
      $this->assertEquals(0.5, division(1, 2));
  }
}
?>

