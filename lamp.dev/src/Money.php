<?php
namespace Src;

class Money
{
    private $value;

    private $currency;

    function __construct($value, Currency $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        return
            $money->getCurrency()->equals($this->getCurrency()) &&
            $money->getValue() === $this->getValue();
    }

    public function add(Money $money)
    {
        if(!$money->getCurrency()->equals($this->getCurrency())) {
            throw new \InvalidArgumentException();
        }

        return new self(
          $money->getValue() + $this->getValue(),
          $this->currency
        );
    }
}