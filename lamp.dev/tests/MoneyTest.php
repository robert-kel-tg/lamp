<?php

namespace App\tests;

use Src\Currency;
use Src\Money;
use Src\Rate;

class MoneyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function moneyShouldBeAdded()
    {
        $aMoney = new Money(30, new Currency('EUR', new Rate(1.5)));
        $newMoney = $aMoney->add(new Money(15, new Currency('EUR', new Rate(1.5))));
        $this->assertEquals(45, $newMoney->getValue());
    }

    /**
     * @test
     */
    public function moneyCantBeModifiedAfterAddition()
    {
        $aMoney = new Money(30, new Currency('EUR', new Rate(1.5)));
        $newMoney = $aMoney->add(new Money(10, new Currency('EUR', new Rate(1.5))));
        $this->assertEquals(30, $aMoney->getValue());
        $this->assertEquals(40, $newMoney->getValue());
    }
}